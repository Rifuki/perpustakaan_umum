<?php session_start(); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Data Anggota List</title>
    <link rel="stylesheet" type="text/css" href="../assets/css/styles.css">
</head>

<body>
    <div class="container">
        <!-- Header -->
        <?php include("./templates/header.php"); ?>
        <!-- End Header -->
        <!-- Aside -->
        <?php include("./templates/aside.php"); ?>
        <!-- End Aside -->

        <!-- Main Content -->
        <main>
            <div class="content-data-anggota">
                <div class="label-konten" style="margin-bottom: 15px;">
                    <h3>List Data Anggota</h3>
                </div>
                <a href="./data_anggota_add.php">Tambah Data</a>
                <table class="data-anggota-konten" border="1" cellspacing="0" style="text-align: center;">
                    <thead>
                        <th>No</th>
                        <th>Id Anggota</th>
                        <th>Nama Anggota</th>
                        <th>Jenis Kelamin</th>
                        <th>No Hp</th>
                        <th>Alamat</th>
                        <th>Aksi</th>
                    </thead>
                    <tbody>
                        <?php
                        require_once("../process/data_anggota_list_process.php");
                        $anggotas = tampilkan_data_anggota();
                        $no = 1;
                        foreach ($anggotas as $anggota) :
                        ?>
                            <tr class="form-row">
                                <td><?= $no++; ?></td>
                                <td><?= $anggota["id_anggota"]; ?></td>
                                <td><?= $anggota["nama_anggota"]; ?></td>
                                <td><?= $anggota["j_k"] == "L" ? "Pria" : "Wanita"; ?></td>
                                <td><?= $anggota["no_hp"]; ?></td>
                                <td><?= $anggota["alamat"]; ?></td>
                                <td>
                                    <a href="./data_anggota_edit.php?id_anggota=<?= $anggota['id_anggota']; ?>">Edit</a>
                                    |
                                    <a href="#" onclick="confirmation()">Hapus</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
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

    <script>
        function confirmation() {
            var del = confirm("Anda Yakin");
            if (del == true) {
                window.location.href = "../process/data_anggota_delete_process.php?id_anggota=<?= $anggota['id_anggota']; ?>";
            }
        }
    </script>
</body>

</html>