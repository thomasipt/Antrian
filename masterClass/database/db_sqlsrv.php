<?php

class db_sqlsv{
    private $con;
    public $query;
    public $debug = false;
    
    /** filter pertama yang digunakan untuk memfilter semua data masuk, post / param */
    public function inputFilter($field){
        $return = addslashes($field);
        return $return;
    }
    
    function __construct($host,$database,$user,$pass){
        
        $this->con = sqlsrv_connect($host,
            array(
                "UID"=>$user,
                "PWD"=>$pass,
                "Database" => $database
            )
        );
        if( $this->con === false ) {
             die( print_r( sqlsrv_errors(), true));
        }
        //mssql_select_db($database,$this->con);
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
        return sqlsrv_query ($this->con,$this->query);
    }
    
    public function fetchAll(){
        $sql = $this->execute($this->query);
        $data = array();
        if(!empty($sql)){
            while($row = sqlsrv_fetch_array($sql, SQLSRV_FETCH_ASSOC)){
                $data[] = $row;
            }
        }
        return $data;
    }
    
    public function fetch(){
        $sql = $this->execute($this->query);
        $return = false;
        if($sql)
            $return =  sqlsrv_fetch_array($sql, SQLSRV_FETCH_ASSOC);
        return $return;
    }
    
    public function lastInsertId(){
        //return mssql_();
    }
    
    public function numRow(){
        $sql = $this->execute($this->query);
        return sqlsrv_num_rows($sql);
    }
}

?>