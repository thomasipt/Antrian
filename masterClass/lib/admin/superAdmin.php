<?php
class admin_superAdmin extends controller{
    public $model = "model";
    
    public function actionIndex(){
        if(isset($_SESSION['tipe_user'])&&$_SESSION['tipe_user']=="superAdmin"){
            $this->actionAdmin();
        }
        else{
            if(isset($_POST['submit'])){
                $this->model->postReader();
                //if($this->model->data['nama'] == "admin"&&$this->model->data['password'] == "password"){
                    $_SESSION['tipe_user'] = "superAdmin";
                    header("location:".__BASEURL__."ro-admin/admin");
                //}
            }
            include_once("view/index.php");
        }
    }
    
    public function actionLog(){
        $content = "";
        include_once("view/admin.php");
    }
    
    public function actionAdmin(){
        $content = $this->renderFile("lib/admin/view/tipe_user.php",array(),false);
        include_once("view/admin.php");
    }
    
    /** menampilkan access pada berdasarkan nama user yang dipanggil */
    public function actionListAccess(){
        $tipe_user = RO::$LP['PARAM_1'];
        
        $tipe = RO::lib("access_tipeUser");
        $tipe->_GET = array("PARAM_1");
        $tipe = $tipe->fetch("nama,id","WHERE id = ".RO::$LP['PARAM_1']);
        $id_user = $tipe['id'];
        $user = $tipe['nama'];        
        $access = RO::lib("access_accessRule");
        $access->alias = "AC";
        $access->relation(
            array("A"=>"ro_action","C"=>"ro_controller"),
            array("C.id"=>"AC.id_controller","A.id"=>"AC.id_action")
        );
        
        $validasi = $access->controllerVal(RO::$LP['PARAM_1']);
        $data = $access->fetchAll("AC.id id,C.nama controller,A.nama action,akses,redirect","WHERE  id_tipe_user = ".RO::$LP['PARAM_1']." and C.nama!='admin_superAdmin' and C.nama!='widget_admin_superAdmin' order by C.nama,A.nama");
        
        $param = RO::lib("access_accessParam");
        $data_param = $param->getData();
        
        $akses_user = RO::lib("access_accessUser");
        $data_user = $akses_user->getData();
        include_once("view/listAccess.php");
    }
    
    /** Merubah hak akses */
    public function actionChangeAccess(){
        $access = RO::lib("access_accessRule");
        $access->table = "ro_akses";
        $access->relation();
        $query = $access->updateQuery("akses = IF(akses='Y','N','Y')","WHERE id = ".RO::$LP['PARAM_1']);
        $access->execute($query);
        $return = $access->fetch("akses","WHERE id= ".RO::$LP['PARAM_1']);
        
        echo "<img src='image/admin/".$return['akses']."_akses.png'/>";
    }
    
    /** Memperbarui hak akses */
    public function actionRefreshAccess(){
        $access = RO::lib("access_accessRule");
        $access->table = "ro_akses";
        $access->addTable = "";
        $access->refreshAccess();
        header("location: admin");
    }
    
    /** Menambah tipe user baru */
    public function actionAddTypeUser(){
        $access = RO::lib("access_accessRule");
        $access->table = "ro_akses";
        $access->addTable = "";
        if(!empty($_POST['submit'])){
            $access->postReader();
            $access->createUser($access->data['nama']);
        }
        header("location: admin");
    }
    
    public function actionDeleteTypeUser(){
        $access = RO::lib("access_accessRule");
        $access->table = "ro_akses";
        $query = $access->deleteQuery("WHERE id_tipe_user = ".RO::$LP['PARAM_1']);
        $access->execute($query);
        $tipe = RO::lib("access_tipeUser");
        $query =  $tipe->deleteQuery("WHERE id = ".RO::$LP['PARAM_1']);
        $tipe->execute($query);
        header("location: ../admin");
    }
    
    /** mengganti redirect */
    public function actionChangeRedirect(){
        $access = RO::lib("access_accessRule");
        $access->table = "ro_akses";
        $query = $access->updateQuery("redirect = IF(redirect = 1, 3, IF(redirect = 3, 4, 1))","WHERE id = ".RO::$LP['PARAM_1']);
        $access->execute($query);
        $return = $access->fetch("redirect","WHERE id=".RO::$LP['PARAM_1']);
        echo $return['redirect'];
    }
    
    /** menghapus access berdasar id pk */
    public function actionDeleteAccess(){
        $access = RO::lib("access_accessRule");
        $access->table = "ro_akses";
        $access->addTable = "";
        $access->postReader();
        $query = $access->deleteQuery("WHERE id = ".$access->data['id']);
        $access->execute($query);
        echo "Berhasil Dihapus";
    }
    
    public function actionUpdateTypeUser(){
        $tipe = RO::lib("access_tipeUser");
        $tipe->postReader();
        $query = $tipe->updateQuery("nama = '".$tipe->data['nama']."'","WHERE id =".$tipe->data['id']);
        print_r($query);
        $tipe->execute($query);
        header("location: admin");
    }
    
    public function actionLogout(){
        session_destroy();
        header("location:../");
    }
    
    /** AKSES PARAM */
    
    /** Menambah parameter baru */
    public function actionAksesAddParam(){
        $param = RO::lib("access_accessParam");
        $param->lib(array("w2ui"=>"model_w2ui"));
        $param->column = array("id_akses","param");
        $param->w2ui->wFormAdd();
    }
    
    public function actionAksesDeleteParam(){
        $param = RO::lib("access_accessParam");
        $param->postReader();
        $query = $param->deleteQuery("WHERE id = ".$param->data['id']);
        $param->execute($query);
    }
    
    /** AKSES USER */
    
    public function actionAksesAddUser(){
        $param = RO::lib("access_accessUser");
        $param->lib(array("w2ui"=>"model_w2ui"));
        $param->column = array("id_akses","id_user");
        $param->w2ui->wFormAdd();
    }
    
    public function actionAksesDeleteUser(){
        $param = RO::lib("access_accessUser");
        $param->postReader();
        $query = $param->deleteQuery("WHERE id = ".$param->data['id']);
        $param->execute($query);
    }
}

?>