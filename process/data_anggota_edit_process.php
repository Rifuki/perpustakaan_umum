<?php 
require_once("../conn.php");

if(isset($_GET['id_anggota'])){
    $id_anggota = $_GET['id_anggota'];
    $sql = "SELECT * FROM $TB_data_anggota WHERE id_anggota = $id_anggota";
    $result = $conn->query($sql);
    $rows = [];
    while($row = mysqli_fetch_array($result)){
        $rows[] = $row;
    }
    return $rows;
}

else if(isset($_POST)){
    $id_anggota     = $_POST['id_anggota'];
    $nama           = $_POST['nama'];
    $j_k            = $_POST['j_k'];
    $no_hp          = $_POST['no_hp'];
    $alamat         = $_POST['alamat'];

    $sql = "UPDATE $TB_data_anggota SET 
        nama_anggota='$nama', 
        j_k='$j_k', 
        no_hp='$no_hp', 
        alamat='$alamat' 
    WHERE id_anggota = $id_anggota";

    $result = $conn->query($sql);

    if($result == true){
        echo("
            <script type='text/javascript'>
                alert('Data Berhasil Diedit');
                window.location.href = '../pages/data_anggota_list.php';
            </script>
        ");
    }
    else{
        echo("
            <script type='text/javascript'>
                alert('Data Gagal Diedit');
                history.back();
            </script>
        ");
    }
}

else{
    die("Error");
}