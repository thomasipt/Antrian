<?php 
class access_accessParam extends model{

    public $table = "ro_akses_param";

    public function hapus($id){
        $this->deleteQuery("WHERE id ='$id'");
        $this->execute();
    }
    
    public function getData(){
        $data = $this->fetchAll();
        $return = array();
        foreach($data as $data){
            $return[$data['id_akses']][$data['id']] = $data['param'];
        }
        return $return;
    }
    /** 
     * TODO:: Bagaimana jika parameter lebih dari satu
     * memberikan nilai kembalian boolean true/false 
     * bernilai true berarti path dapat diakses
     * jika bernilai false tidak dapat diakses
    */
    public function cekParam($id_akses, $akses, $param = ""){
        $parameter = $param;
        if(empty($parameter))
            $parameter = (empty(RO::$LP['PARAM_1']))?"":RO::$LP['PARAM_1'];
        $this->selectQuery("id","WHERE id_akses = $id_akses and param = '$parameter'");
        $hasil = RO::$DB->fetch();
        return ($akses == "Y")?(empty($hasil)?true:false):(empty($hasil)?false:true);
    }
    
}

?>