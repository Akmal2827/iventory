<?php 

$hostname = 'localhost';
$username = 'root';
$passworrd = '';
$db_name = 'db_iventory_akmal';

$conn = mysqli_connect($hostname,$username,$passworrd,$db_name);

if(!$conn){
    die('koneksi gagal.' . mysqli_connect_error());
}
?>