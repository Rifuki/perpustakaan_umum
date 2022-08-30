<?php
require_once("../conn.php");

$id_anggota     = $_POST["id_anggota"];
$nama           = $_POST['nama'];
$j_k            = $_POST['j_k'];
$no_hp          = $_POST['no_hp'];
$alamat         = $_POST['alamat'];

$query = "INSERT INTO $TB_data_anggota VALUES($id_anggota, '$nama', '$j_k', '$no_hp', '$alamat');";
$result = $conn->query($query);

if (mysqli_affected_rows($conn) == 1) {
    echo ("
        <script type='text/javascript'>
            alert('Data Anggota Berhasil Ditambahkan');
            window.location.href = '../pages/data_anggota_list.php';
        </script>
    ");
}
else{
    echo("
        <script type='text/javascript'>
            alert('Data Anggota Gagal Ditambahkan');
            history.back();
        </script>
    ");
}

// echo($TB_data_anggota);
// var_dump($id_anggota, $nama, $j_k, $no_hp, $alamat);