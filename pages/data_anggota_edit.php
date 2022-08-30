<?php
session_start();
require_once("../process/data_anggota_edit_process.php");
$anggota = $rows[0];

function active_radio_button($value, $input)
{
    $result = $value == $input ? "checked" : "";
    return $result;
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Data Anggota Edit</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
</head>

<body>
    <div class="container">
        <!-- Header -->
        <?php include("../pages/templates/header.php"); ?>
        <!-- End Header -->
        <!-- Aside -->
        <?php include("../pages/templates/aside.php"); ?>
        <!-- End Aside -->

        <!-- Main Content -->
        <main>
            <div class="content-data-anggota">
                <div class="label-konten">
                    <h3>Edit Data Anggota</h3>
                </div>
                <form action="../process/data_anggota_edit_process.php" method="POST">
                    <table class="data-anggota-konten">
                        <tr class="form-row">
                            <td class="kiri">ID Anggota</td>
                            <td><input type="text" value="<?= $anggota['id_anggota']; ?>" disabled /></td>
                            <input type="text" name="id_anggota" value="<?= $anggota['id_anggota']; ?>" hidden />
                        </tr>
                        <tr class="form-row">
                            <td>Nama</td>
                            <td><input type="text" name="nama" value="<?= $anggota['nama_anggota']; ?>" /></td>
                        </tr>
                        <tr class="form-row">
                            <td>Jenis Kelamin</td>
                            <td><input type="radio" name="j_k" value="L" <?= $anggota['j_k'] == "L" ? "checked" : "" ?> /> Pria</td>
                        </tr>
                        <tr class="form-row">
                            <td></td>
                            <td><input type="radio" name="j_k" value="P" <?php active_radio_button("P", $anggota["j_k"]); ?> /> Wanita</td>
                        </tr>
                        <tr class="form-row">
                            <td>No Hp</td>
                            <td><input type="text" name="no_hp" value="<?= $anggota['no_hp']; ?>" /></td>
                        </tr>
                        <tr class="form-row">
                            <td>Alamat</td>
                            <td><textarea name="alamat" cols="50" rows="3"><?= $anggota['alamat']; ?></textarea></td>
                        </tr>
                        <tr class="form-row">
                            <td></td>
                            <td><input type="submit" value="Simpan" /></td>
                        </tr>
                    </table>
            </div>

            </form>
        </main>
        <!-- End Main Content -->

        <!-- Footer -->
        <?php include("../pages/templates/footer.php"); ?>
        <!-- End Footer -->

        <!-- Javascript -->
        <script type="text/javascript" src="../assets/js/pages.js"></script>
        <script type="text/javascript" src="../assets/js/script.js"></script>
        <!-- End Javascript -->
        
    </div>
</body>

</html>