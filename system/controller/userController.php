<?php

class userController extends controller{
    
    //public $model = "";
    
    public function actionIndex(){
        $this->view(
            array("content"=>"index.php"),
            array()
        );
    }
    
    public function actionProfil(){
        $this->view(
            array("content"=>"index.php"),
            array()
        );
    }
    
    public function actionEdit(){
        
    }
    
}

?>