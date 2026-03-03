<?php

class kategoriController extends controller{
    
    public $model = "kategori";
    
    public function actionIndex(){
        
    }
    
    public function actionAdmin(){
        $this->view(
            array("content"=>"index.php"),
            array()
        );
    }
    
    public function actionAdd(){
        $this->view(
            array("content"=>"index.php"),
            array()
        );
    }
    
    public function actionEdit(){
        
    }
    
    public function actionHapus(){
        
    }
    
    public function actionGetCombo(){
        
    }
    
}

?>