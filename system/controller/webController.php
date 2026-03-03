<?php

class webController extends controller{
    
    public $layout = "layout_utama.php";
    public $model = "counter";
    
    public function actionIndex(){                
        if(empty($_SESSION['layanan'])){
            $this->redirect(__BASEURL__."auth/");
        }
        $sisa = RO::model('v_cek')->fetch("(nomor-counter) sisa","where layanan = '$_SESSION[layanan]'");
        $sisa = (empty($sisa['sisa']))?0:$sisa['sisa'];
        
        $counter = RO::model('counter');
        $record = $counter->fetch("*","where layanan = '$_SESSION[layanan]' and loket = $_SESSION[loket] order by no desc");
        $hasilCounter = empty($record['COUNTER'])?1:$record['COUNTER'];
        
        if($hasilCounter<100){
            $hasilCounter ="0".$hasilCounter;
            if($hasilCounter<10){
                 $hasilCounter = "0".$hasilCounter;
            }
        }
        
        $this->view(
            array(
                "content"=>"index.php",
                "counter"=>$hasilCounter,
                "sisa"=>$sisa,
            )
        );
        
    }
    
    public function actionCall(){
        //cek sisa
        $sisa = RO::model('v_cek')->fetch("(nomor-counter) sisa","where layanan = '$_SESSION[layanan]'");
        $sisa = (empty($sisa['sisa']))?0:$sisa['sisa'];
        
        $counter = RO::model('counter');
        
        if($sisa > 0){
            $record = $counter->fetch("*","where layanan = '$_SESSION[layanan]' order by no desc");
            $hasilCounter = empty($record['COUNTER'])?1:$record['COUNTER'];
            if(!empty($record)){
                $hasilCounter += 1;
                $counter->insert('layanan,loket,counter,sts',"'$_SESSION[layanan]',$_SESSION[loket],$hasilCounter,0");
            }else{
                $counter->insert('layanan,loket,counter,sts',"'$_SESSION[layanan]',$_SESSION[loket],1,0");
            }
        }else{
            $record = $counter->fetch("*","where layanan = '$_SESSION[layanan]' and loket = $_SESSION[loket] order by no desc");
            $hasilCounter = empty($record['COUNTER'])?1:$record['COUNTER'];
        }
        if($hasilCounter<100){
            $hasilCounter ="0".$hasilCounter;
            if($hasilCounter<10){
                 $hasilCounter = "0".$hasilCounter;
            }
        }
        echo $hasilCounter;
        //$this->model->insert("layanan,counter,loket","'A',1,1");

    }
    
    public function actionReCall(){
        $counter = RO::model('counter');
        $id = $counter->fetch("no,counter","where layanan = '$_SESSION[layanan]' and loket = '$_SESSION[loket]' order by no desc");
        $counter->update('sts = 0',"where no = $id[no]");
        $hasilCounter = $id['counter'];
        if($hasilCounter<100){
            $hasilCounter ="0".$hasilCounter;
            if($hasilCounter<10){
                 $hasilCounter = "0".$hasilCounter;
            }
        }
        echo $hasilCounter;
    }
    
    public function actionCekSisa(){
        error_reporting(0);
        //$sisaAwal = RO::$LP['PARAM_1'];
        /*
        $return = false;
        $timeout = 10; // timeout in seconds
        $now = time(); // start time
        

        // loop for $timeout seconds from $now until we get $data
        while((time() - $now) < $timeout) {
        */
            $sisa = RO::model('v_cek')->fetch("(nomor-counter) sisa","where layanan = '$_SESSION[layanan]'");
            $sisa = (empty($sisa['sisa']))?0:$sisa['sisa'];
        /*
            if($sisaAwal != $sisa){
                echo $sisa;
                break;
            }else{
                $return = true;
            }
            usleep(100000);
        }
        if($return){
            echo $sisa;
        }
        */
        echo $sisa;
    }
    
}

?>