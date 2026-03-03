<?php

class authController extends controller{
    
    public $model = "pegawai";
    public $layout = "layout_signin.php";
    
    public function actionIndex(){
        if(!empty($_SESSION['layanan'])){
            $this->redirect(__BASEURL__."web/");
        }
        if($this->model->saveRecord()){
            $this->model->column = array("layanan","loket","password");
            $this->model->lib(array("form"=>"model_form"));
            $data = $this->model->form->selectForm();
            
            $_SESSION['layanan'] = $data[0]['LAYANAN'];
            $_SESSION['loket'] = $data[0]['LOKET'];
            $_SESSION['lokasi'] = $data[0]['LOKASI'];
			$_SESSION['versi'] = $data[0]['VERSI'];
            $this->redirect(__BASEURL__."web/");
        }
        $this->view(
            array("content"=>"index.php"),
            array()
        );
    }
    
    public function actionLogout(){
        session_destroy();
        $this->redirect(__BASEURL__);
    }
    
}

?>