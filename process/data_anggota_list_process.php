<?php 
require_once("../conn.php");

function tampilkan_data_anggota(){
    global $conn; global $TB_data_anggota;

    $rows = [];
    $sql = "SELECT * FROM $TB_data_anggota";
    $result = $conn->query($sql);
    while($row = mysqli_fetch_array($result)){
        $rows[] = $row;
    }
    return $rows;
}
