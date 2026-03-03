<?php 

class chart_highcharts{
    
    /** memberikan kembalian data yang akan digunakan pada chart berbentuk pie
     * data kembalian berbentuk json
     * $data adalah kumpulan data dari database berbentuk array
     * $name = sebagai nama / label dari data
     * $value = adalah value yang mau diambil
    */
    public function pieSeries($data = array(),$name,$value){
        $data_return = array();
        foreach($data as $data_final){
            $data_return[] = array("name"=>$data_final[$name],"y"=>$data_final[$value]);
        }
        return json_encode($data_return);
    }
    
    /** langsung JSON 
     * digunakan ketika data langsung diecho dalam javascript pada view
     * perlu menggunakan ini karena object yg dihasilkan json encode mengandung tanda petik " "
     * jadi tanda petiknya dibuang
     * kalau json yg biasanya dipanggil pake ajax, biasanya sudah default ada headernya json, jd otomatis tidak ada petiknya
    */
    function langsungJSON($data,$key,$val){
        $data = json_encode($data,JSON_NUMERIC_CHECK);
        $data = str_replace("\"$key\"",$key,$data);
        $data = str_replace("\"$val\"",$val,$data);
        return $data;
    }
}

?>