<?php
class model{

    public $column = array();
    public $data = array(); //data final, jadi data yang akan masuk dan keluar dari database ada dalam sini
    public $table;
    public $alias = "MT"; // alias untuk tabel utama, MT = main table
    public $lib = array();
    protected $reset = true;

    private $relational_tabel = "";
    private $relational_contidion = "";


    /** untuk mencegah kolom yang tidak sesuai, karena class diload sekali saja */
    public function resetInput(){
        $this->relational_contidion = "";
        $this->relational_tabel = "";
        if($this->reset){
            $this->column = array();
        }
    }

    /** filtering all post input
    private function postFilter($value,$key){
        //$finalValue = (is_array($value))?$value:;
        RO::$DB->inputFilter($value);
    }
    array_walk_recursive($_POST,array($this,'postFilter'));
    WARNING :: masih bug dan konfensional, sepertinya semua post tidak perlu difilter, di lib model form, data juga difilter
                kemungkinan besar data yang masuk menggunakan form, lewat situ
    */
    public function __construct(){
        $this->lib($this->lib);
    }

    /** RELATION
     * $table = berisikan table yang akan direlasikan dengan table master pada model
     *      - berbentuk array, key akan menjadi alias, harus menggunakan key untuk alias dan value adalah nama tabel
     * $relation = kondisi yang menghubungkan relasi, sementara menggunakan join biasa, bukan left atau right
     *      - berbentuk array, key adalah primary key dan value adalah foreign key
     *
     * WARNING:: untuk relasi entah bagus seperti ini atau tidak, karena otomatis langsung menggunakan AND dan kondisi =
     *        ditakutkan akan menghambat keleluasaan, tapi prediksi sebagian besar seperti ini,
     *        jika ingin lebih leluasa bisa dimasukan dalam statement condition pada fetch.
    */
    public function relation($table = array(), $relation = array()){
        $this->relational_tabel = "";
        $this->relational_contidion = "";
        foreach($table as $key=>$value){
            $key = (is_numeric($key))?"T$key":$key;
            $this->relational_tabel .= ", $value $key";
        }
        foreach($relation as $key=>$value){
            if(!empty($this->relational_contidion))
                $this->relational_contidion .= " AND";
            $this->relational_contidion .= " $key = $value";
        }
    }

    /** BASIC QUERY */
    public function deleteQuery($condition){
        RO::$DB->prepare("Delete From $this->table $condition");
    }

    public function insertQuery($column,$value){
        RO::$DB->prepare("insert into $this->table($column) values($value)");
    }

    public function selectQuery($select="*",$condition="",$order="",$limit=""){
        $where = "";
        if(!empty($this->relational_contidion)){
            $where = "where ";
            if(!empty($condition)&&substr($condition,0,5)=="where"){
                $condition = str_ireplace("where "," and ",$condition);
            }
        }
        RO::$DB->prepare("select $select from $this->table $this->alias $this->relational_tabel $where $this->relational_contidion $condition $order $limit");
    }

    public function updateQuery($set,$condition=""){
        RO::$DB->prepare("update $this->table set $set $condition");
    }

    public function execute(){
        RO::$DB->execute();
    }

    /** DATA INPUT */
    public function postReader(){
        $this->data = $_POST;
    }

    /** DATA OUTPUT */
     public function dataCombo($key,$value,$condition = ""){
        $return = array();
        $data = $this->fetchAll("$key,$value",$condition);
        foreach($data as $data){
            $return[$data[$key]] = $data[$value];
        }
        return $return;
    }

    /** memberikan kembalian data pada model dengan bentuk objek tetapi isinya kosong
     *  digunakan untuk input pada form */
    public function dataModelReturn(){
        $data = array();
        foreach($this->column as $column){
            $data[$column] = "";
        }
        return $data;
    }

    public function fetch($select = "*",$condition = ""){
        $this->selectQuery($select,$condition);
        $this->data = RO::$DB->fetch();
        if(empty($this->data)){
            $this->data = $this->dataModelReturn();
        }
        $this->beforeLoad();
        return $this->data;
    }

    public function fetchAll($select = "*",$condition = ""){
        $this->selectQuery($select,$condition);
        return RO::$DB->fetchAll();
    }

    public function delete($condition){
        $this->deleteQuery($condition);
        return $this->execute();
    }

    public function update($set,$condition){
        $this->updateQuery($set,$condition);
        return $this->execute();
    }

    public function insert($column,$value){
        $this->insertQuery($column,$value);
        return $this->execute();
    }

    public function numRow($select = "*",$condition = ""){
        $this->selectQuery($select,$condition);
        return RO::$DB->numRow();

    }

    public function findByPk($id,$select = "*",$field = "id"){

    }

    public function findByAttribut($condition = array(), $select = "*"){

    }

    /** before save dan before load hanya berlaku pada single row data / data satu baris, dari fetch, update dan input
    mengedit data sebelum disimpan */
    public function beforeSave(){}
    /** mengedit data setelah keluar dari database */
    public function beforeLoad(){}

    /** LIB LOAD */
    public function lib($lib = array()){
        foreach($lib as $key=>$lib){
            $this->$key = $this->$key = RO::lib($lib,$this);
        }
    }

    /** CEK STATUS */
    public function saveRecord(){
        return !empty($_POST);
    }

    public function cekUpdate($id){
        $ret = false;
        if(!empty($id))$ret = true;
        return $ret;
    }
}


?>
