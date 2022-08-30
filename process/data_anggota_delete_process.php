<?php
require_once("../conn.php");

$id_anggota = $_GET['id_anggota'];
$sql = "DELETE FROM $TB_data_anggota WHERE id_anggota=$id_anggota";
$conn->query($sql);

if(mysqli_affected_rows($conn) == 1){
    echo("
        <script type='text/javascript'>
            alert('Data Anggota Berhasil Dihapus');
            window.location.href = '../pages/data_anggota_list.php';
        </script>
    ");
}
else{
    echo("
        <script type='text/javascript'>
            alert('Data Anggota Gagal Dihapus');
            history.back();
        </script>
    ");
}