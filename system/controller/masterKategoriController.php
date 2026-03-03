<?php

class masterKategoriController extends controller{
    
    public $model = "master_kategori";
    
     public function actionList(){
        $data = $this->model->fetchAll("id,master_kategori");
        echo $this->outputJSON(
            array(
                "master_kategori"=>$data
            )
        );
    }
    
    public function actionDetail(){
        $id = RO::$LP['PARAM_1'];
        if(!empty($id)){
            $data = $this->model->fetch("id,id_controller,nama,deskripsi","where id = $id");
            echo $this->outputJSON($data);
        }else{
            echo 0;
        }
    }
    
    
    public function actionSimpan(){
        if(empty($_POST['id'])){
            $this->tambah();
        }else{
            $this->edit();
        }
    }
    
    private function tambah(){
        $this->model->column = array("id_controller","nama","deskripsi");
        if($this->model->saveRecord()){
            $this->model->lib(array("form"=>"model_form"));
            if($this->model->form->inputForm(array("notEmpty"=>array("id_controller","nama")))){
                echo "tambah";
            }
        }
    }
    
    private function edit(){
        RO::$LP["PARAM_1"] = RO::$DB->inputFilter($_POST['id']);
         $this->model->column = array("nama","deskripsi");
        if($this->model->saveRecord()){
            $this->model->lib(array("form"=>"model_form"));
            if($this->model->form->updateForm(array("notEmpty"=>array("nama")))){
                echo "edit";
            }
        }
    }
    
    public function actionHapus(){
        $id = RO::$DB->inputFilter($_POST['id']);
        $id_controller = RO::$DB->inputFilter($_POST['id_controller']);
        $this->model->delete("where id = $id");
        $ctrl = RO::model("ctrl");
        $ctrl->updateJumlahVariable($id_controller);
        echo "berhasil";
    }
    
}

?>