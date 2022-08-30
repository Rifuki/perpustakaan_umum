<?php
session_start();
?>

<!DOCTYPE html>
<html>

<head>
  <title>Sistem Informasi Perpustakaan</title>
  <link rel="stylesheet" type="text/css" href="../assets/css/styles.css" />
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
      <div class="content-beranda">
        <div class="label-konten">
          <h3>Beranda</h3>
        </div>
        <div class="beranda-judul">
          <h1>SELAMAT DATANG DI SISTEM INFORMASI PERPUSTAKAAN</h1>
        </div>
        <div class="beranda-konten">
          <h2>"MEMBACA ADALAH JENDELA DUNIA"</h2>
        </div>
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