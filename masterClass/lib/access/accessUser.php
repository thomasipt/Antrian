<?php 
class access_accessUser extends model{

    public $table = "ro_akses_user";
       
    public function hapus($id){
        $this->deleteQuery("WHERE id ='$id'");
        $this->execute();
    }
    
    public function getData(){
        $skpd = RO::model('skpd')->dataCombo('id','skpd');
        $data = $this->fetchAll();
        $return = array();
        foreach($data as $data){
            $return[$data['id_akses']][$data['id']] = $skpd[$data['id_user']];
        }
        return $return;
    }
    /** 
     * TODO:: Bagaimana jika tabel berbeda-beda / dinamis nama tabel user bisa semaunya
     * memberikan nilai kembalian boolean tre/false 
     * bernilai true berarti path dapat diakses
     * jika bernilai false tidak dapat diakses
    */
    public function cekUser($id_akses, $akses){
        $return = true;
        if(!empty($_SESSION['id_user'])){
            $this->selectQuery("id","WHERE id_akses = $id_akses and id_user = $_SESSION[id_user]");
            $hasil = RO::$DB->fetch();
            $return =  ($akses == "Y")?(empty($hasil)?true:false):(empty($hasil)?false:true);
        }
        return $return;
    }
    
}

?>