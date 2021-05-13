<?php if(!defined("include")){ echo '<meta http-equiv="refresh" content="0;URL=../index.php">'; exit(); }

set_time_limit(0);

$dbhost = "localhost";
$dbuser = "root"; //Veritabanı Kullanıcı Adı
$dbpass = ""; //Veritabanı Şifresi
$dbdata = "wmtools"; //Veritabanı Adı
$dbek = "tools_"; //Tablo Öneki -> bu kısmı değiştirmeyin!

try {
     $db = new PDO("mysql:host=$dbhost;dbname=$dbdata", "$dbuser", "$dbpass", array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
} catch ( PDOException $e ){
     print $e->getMessage(); exit();
}

$bshrf = 'http://'.$_SERVER['HTTP_HOST'].'/'; //ssl sertifikası var ise http:// yazan kısmı https:// olarak değiştirin.

$print = $db->query("select * from ".$dbek."ayarlar")->fetch(PDO::FETCH_ASSOC); ?>