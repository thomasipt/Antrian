<?php

class db_mssql{
    private $con;
    public $query;
    public $debug = false;
    
    /** filter pertama yang digunakan untuk memfilter semua data masuk, post / param */
    public function inputFilter($field){
        $return = addslashes($field);
        return $return;
    }
    
    function __construct($host,$database,$user,$pass){
        $this->con = mssql_connect($host,$user,$pass);
        mssql_select_db($database,$this->con);
    }
    
    public function prepare($query){
        $this->query = $query;
    }
    
    public function bindValue($key,$value){
        $query = str_replace($key,"'".$this->inputFilter($value)."'",$this->query);
        $this->query = $query;
    }
    public function execute(){
        if($this->debug)echo $this->query."<br />";
        return mssql_query($this->query,$this->con);
    }
    
    public function fetchAll(){
        $sql = $this->execute($this->query);
        $data = array();
        if(!empty($sql)){
            while($row = mssql_fetch_assoc($sql)){
                $data[] = $row;
            }
        }
        return $data;
    }
    
    public function fetch(){
        $sql = $this->execute($this->query);
        $return = false;
        if($sql)
            $return =  mssql_fetch_assoc($sql);
        return $return;
    }
    
    public function lastInsertId(){
        //return mssql_();
    }
    
    public function numRow(){
        $sql = $this->execute($this->query);
        return mssql_num_rows($sql);
    }
}

?>