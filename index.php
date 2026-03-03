<?php
$config = array(
    'website'=>'',
    'maincont' => 'authController',
    'baseurl'=>'/antrian/',
    'tz'=>'Asia/jakarta',
    'roadmin'=>false,
    'accessrule'=>false,
    'enabledb'=>true,
    'session'=>true,
    'dbhost'=>'SERVERHP',
    'dbname'=>'db_ANTRIAN',
    'dbuser'=>'db_ANTRIAN',
    'dbpass'=>'',
);
include_once "masterClass/loader.php";
$RO = new RO(
	//array("access"=>"access_userView")
);

?>
