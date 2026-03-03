<?php

/**
 * Application Configuration Array
 * 
 * Konfigurasi utama aplikasi sistem antrian
 * 
 * @var array $config
 * 
 * @property string $website Website URL atau nama website
 * @property string $maincont Controller utama yang dijalankan saat aplikasi dimulai
 * @property string $baseurl URL base aplikasi (path root aplikasi)
 * @property string $tz Timezone aplikasi (Asia/Jakarta untuk WIB)
 * @property bool $roadmin Status role admin
 * @property bool $accessrule Aktifkan aturan akses/permission sistem
 * @property bool $enabledb Aktifkan koneksi database
 * @property bool $session Aktifkan session management
 * @property string $dbhost Hostname/IP server database
 * @property string $dbname Nama database yang digunakan
 * @property string $dbuser Username untuk login ke database
 * @property string $dbpass Password untuk login ke database
 */
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