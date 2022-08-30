<?php session_start() ?>
<!DOCTYPE html>
<html>

<head>
    <title>Data Anggota Add</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
</head>

<body>
    <div class="container">
        <!-- Header -->
        <?php include("./templates/header.php"); ?>
        <!-- End Header-->
        <!-- Aside -->
        <?php include("./templates/aside.php"); ?>
        <!-- End Aside -->

        <!-- Main Content -->
        <main>
            <div class="content-data-anggota">
                <div class="label-konten">
                    <h3>Input Data Anggota</h3>
                </div>
                <form action="../process/data_anggota_add_process.php" method="POST">
                    <table class="data-anggota-konten">
                        <tr class="form-row">
                            <td class="kiri">ID Anggota</td>
                            <td><input type="text" name="id_anggota" /></td>
                        </tr>
                        <tr class="form-row">
                            <td>Nama</td>
                            <td><input type="text" name="nama" /></td>
                        </tr>
                        <tr class="form-row">
                            <td>Jenis Kelamin</td>
                            <td><input type="radio" name="j_k" value="L" /> Pria</td>
                        </tr>
                        <tr class="form-row">
                            <td></td>
                            <td><input type="radio" name="j_k" value="P" /> Wanita</td>
                        </tr>
                        <tr class="form-row">
                            <td>No HP</td>
                            <td><input type="text" name="no_hp" /></td>
                        </tr>
                        <tr class="form-row">
                            <td>Alamat</td>
                            <td><textarea name="alamat" cols="50" rows="3"></textarea></td>
                        </tr>
                        <tr class="form-row">
                            <td></td>
                            <td><input type="submit" value="Simpan" /></td>
                        </tr>
                    </table>
                </form>
            </div>
        </main>
        <!-- End Main Content -->

        <!-- Footer -->
        <?php include("./templates/footer.php"); ?>
        <!-- End Footer -->
    </div>

    <!-- Javascript -->
    <script type="text/javascript" src="../assets/js/pages.js"></script>
    <script type="text/javascript" src="../assets/js/script.js"></script>
    <!-- End Javascript -->

</body>

</html>