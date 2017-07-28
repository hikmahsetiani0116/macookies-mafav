<?php
$server= "localhost";
$username= "root";
$password= "";
$database= "dbkue";

mysql_connect($username,$password) or die ("Koneksi gagal");
mysql_select_db($database) or die ("Database tidak bisa dibuka");
?>