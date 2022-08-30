<?php 

$DB_HOST = "localhost";
$DB_USER = "root";
$DB_PASS = "digitalent";
$DB_NAME = "db_perpustakaan_umum";
$TB_data_anggota = "t_data_anggota";

$conn = new mysqli($DB_HOST, $DB_USER, $DB_PASS, $DB_NAME);
if($conn->connect_error){
    die("Connection Failed : ".$conn->connect_error);
}