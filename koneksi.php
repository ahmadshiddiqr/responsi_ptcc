<?php
$server = 'localhost';
$username = 'root';
$password = '';
$db_name = 'mhs';
$db = mysqli_connect($server,$username,$password) or DIE("koneksi ke database gagal !!");
mysqli_select_db($db, $db_name) or DIE("nama database tersebut tidak ada !!");
?>