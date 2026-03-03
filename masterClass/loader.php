<?php

    /**
     * 'website'=>'official                                     //Folder tempat website berada
     * 'maincont' => 'roController',                            //controller default
     * 'baseurl'=>'/RO/official/',                              //baseurl
     * 'tz'=>'Asia/Jakarta',                                    //timezone
     * 'roadmin'=>true,                                         //boolean, ro-admin hidup atau tidak
     * 'accessrule'=>true,                                      //boolean, memerlukan accessrule atau tidak
     * 'enabledb'=>true,                                        //boolean, enable database
     * 'session'=>true,                                         //enable session
     * 'dbhost'=>'host',                                        //alamat host
     * 'dbname'=>'name-database'                                //nama database
     * 'dbuser'=>'root',                                        //username database 
     * 'dbpass'=>'',                                            //password database 
     * 
    */

foreach ($config as $key=>$val) {
	define('__' . strtoupper($key) . '__', $val);
}

if(__SESSION__)
    session_start();

require_once "controller.php";
require_once "model.php";
require_once "RO.php";


?>