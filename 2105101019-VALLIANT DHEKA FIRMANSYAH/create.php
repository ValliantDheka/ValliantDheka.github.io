<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Sastro Wiyono</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <!-- font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Archivo:wght@400;500;600;700&family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" href="style/style.css" />
    <!-- link icon -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css" />
  </head>
  <body style="background-color: #ff0000" id="home">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg bg-trasparant fixed-top">
      <div class="container">
      <!-- <a class="navbar-brand" href="#"><img src="aseets/img/logo.png" alt="logo" style="width: 50px" /></a> -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav ms-auto gap-4 font-poppins" style="transform: translateY(10px)">
            <!-- gap untuk memberikan jarak antara isi navbar -->
            <a class="nav-link active fw-medium" aria-current="page" href="#contact">Admin Tambah</a>
            <!-- fw-medium ini font weight agar tidak terlalu tebal -->
            <a class="nav-link" href="index.php">Admin</a>
            <!-- <a class="nav-link" href="#product">Product</a>
            <a class="nav-link" href="#contact">Contact</a>
          </div> -->
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
<body>
<!-- contact -->
<section id="contact">
      <div class="container font-poppins">
        <div class="row mt-5">
          <div class="col text-center">
            <h1 class="fw-bold">Contact</h1>
          </div>
        </div>
        <div class="row">
          <div class="col-6 d-flex mt-5">
            <img src="aseets/img/garis.png" height="510px" alt="" />
            <img src="aseets/img/logo.png" width="500px" height="510px" style="transform: translateX(-34em)" alt="" />
          </div>
          <div class="col-6 mt-5">

          <?php
          //Include file koneksi, untuk koneksikan ke database
          include "koneksi.php";

          //Fungsi untuk mencegah inputan karakter yang tidak sesuai
          function input($data) {
              $data = trim($data);
              $data = stripslashes($data);
              $data = htmlspecialchars($data);
              return $data;
          }
          //Cek apakah ada kiriman form dari method post
          if ($_SERVER["REQUEST_METHOD"] == "POST") {

              $nama=input($_POST["nama"]);
              $no=input($_POST["no"]);
              $alamat=input($_POST["alamat"]);
              $pesanan=input($_POST["pesanan"]);

          //Query input menginput data kedalam tabel anggota
              $sql="insert into pesanan (nama,no,alamat,pesanan) values
		          ('$nama','$no','$alamat','$pesanan')";

          //Mengeksekusi/menjalankan query diatas
              $hasil=mysqli_query($kon,$sql);

          //Kondisi apakah berhasil atau tidak dalam mengeksekusi query diatas
          if ($hasil) {
              header("Location:create.php");
              }
          else {
              echo "<div class='alert alert-danger'> Data Gagal disimpan.</div>";
              }
    }
    ?>

            <form action="<?php echo $_SERVER["PHP_SELF"];?>" method="post">
              <div class="mb-3">
                <label class="form-label fw-semibold">Nama</label>
                <input type="text" class="form-control" name="nama" aria-describedby="nama" placeholder="Masukan Nama" required  style="border-color: #814e2b; background-color: rgba(129, 78, 43, 0.03)" />
              </div>
              <div class="mb-3">
                <label class="form-label fw-semibold">Nomor Handphone</label>
                <input type="text" class="form-control" name="no" placeholder="Masukan Nomor" required style="border-color: #814e2b; background-color: rgba(129, 78, 43, 0.03)" aria-describedby="no" />
              </div>
              <div class="mb-3">
                <label class="form-label fw-semibold">Alamat</label>
                <textarea class="form-control" name="alamat" placeholder="Masukan Alamat" required style="border-color: #814e2b; height: 10em; background-color: rgba(129, 78, 43, 0.03)" rows="3"></textarea>
              </div>
              <div class="mb-3">
                <label class="form-label fw-semibold">Pesanan</label>
                <textarea class="form-control" name="pesanan" placeholder="Masukan Pesanan" required style="border-color: #814e2b; height: 10em; background-color: rgba(129, 78, 43, 0.03)" rows="3"></textarea>
              </div>
              <button type="submit" class="btn btn-primary px-5 py-2">Tambah</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir contact -->
</div>
<footer>
      <div class="container font-poppins">
        <div class="row">
          <div class="col text-center p-4" style="border-top: 1px solid #814e2b">
            <div>
              <p style="transform: translateY(8px)">
                Created <i class="bi bi-emoji-smile" style="color: #814e2b"></i> by <a class="text-decoration-none fw-bold" target="_blank" style="color: #ffffff" href="https://www.instagram.com/valliantdheka_/?hl=en">Valliant Dheka F</a>
              </p>
            </div>
          </div>
        </div>
      </div>
    </footer>
</body>
</html>