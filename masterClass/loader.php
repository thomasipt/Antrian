<?php
foreach ($config as $key=>$val) {
	define('__' . strtoupper($key) . '__', $val);
}

if(__SESSION__)
    session_start();

require_once "controller.php";
require_once "model.php";
require_once "RO.php";


?>
