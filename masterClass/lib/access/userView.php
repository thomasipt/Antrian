<?php

class access_userView{    
    /** berisikan tipe user yang diijinkan mengakses bagian tersebut akan mengecek dan mengambalikan kembalian */
    public function allowAccess($allow_type_user = array()){
        $user = (!empty($_SESSION['tipe_user']))?$_SESSION['tipe_user']:"";
        $return = in_array($user,$allow_type_user); 
        return $return;
    }
    
    /** admin atau tipe yang ditentukan yang memiliki id sama*/
    public function standart1($id,$allow_type_user = array()){
        $return = false;
        if(!empty($id)){
            $return1 = $this->admin();
            $return2 = $this->allowAccess($allow_type_user);
            $return3 = $this->sameId($id);
            $return = ($return1||($return2&&$return3))?true:false;
        }
        return $return;
    }
    
    /** admin atau tipe yang ditentukan */
    public function standart2($allow_type_user = array()){
        $return1 = $this->allowAccess($allow_type_user);
        $return2 = $this->admin();
        $return = ($return1||$return2)?true:false;
        return $return;
    }
    
    /** admin dan id yang sama */
    public function standart3($id_user = ""){
        $return1 = (!empty($id_user))?$this->sameId($id_user):false;
        $return2 = $this->admin();
        $return = ($return1||$return2)?true:false;
        return $return;
    }
    
    /** path allowed for user login without return view
     * return boolean 
     */
    public function pathBool($controller,$action,$param=""){
        $cek = RO::lib("access_accessRule");
        //RO::$DB->debug = true;
        $hasil = $cek->cekAccess($controller."Controller","action".$action,$_SESSION['tipe_user']);
        $cek_parameter = false;
        if(!empty($hasil['akses'])){
            if($hasil['akses']=="Y")
                $cek_parameter = true;
            $cU = RO::lib("access_accessUser");
            $cek_parameter = $cU->cekUser($hasil['id'],$hasil['akses']);
            if($cek_parameter){
                if(!empty($param)){ 
                    $cP = RO::lib("access_accessParam");
                    $cek_parameter = $cP->cekParam($hasil['id'],$hasil['akses'],$param);
                }
            }
        }

        return $cek_parameter;
    }
    
    /** path allowed for user login with return view */
    public function path($controller,$action,$returnView,$param=""){
        if($this->pathBool($controller,$action,$param)){
            echo $returnView;
        }
    }
    
    /** mengecek untuk add, id adalah id tabel yang terkait */
    public function add($id){
        $return = (empty($id))?true:false;
        return $return;
    }
    
    public function update($id){
        $return = (empty($id))?false:true;
        return $return;
    }
    
    public function admin(){
        $user = (!empty($_SESSION['tipe_user']))?$_SESSION['tipe_user']:"";
        $return = ($user=="admin")?true:false; 
        return $return;
    }
    
    /** mengembalikan true jika idnya sama, id_name adalah nama index pada session yang menyimpan id_user yang login */
    public function sameId($id,$id_name = "id_user"){
        $user = (!empty($_SESSION["$id_name"]))?$_SESSION["$id_name"]:"";
        $return = ($user==$id)?true:false; 
        return $return;
    }
    
    
}

?>