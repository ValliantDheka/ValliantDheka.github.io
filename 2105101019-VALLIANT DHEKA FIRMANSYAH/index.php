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
            <!-- fw-medium ini font weight agar tidak terlalu tebal -->
            <a class="nav-link" href="home.php">Home</a>
            <a class="nav-link" href="index.php">Admin</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
<div class="container">
    <br>
    <h4><center>DAFTAR PESANAN</center></h4>
<?php

    include "koneksi.php";

    //Cek apakah ada kiriman form dari method post
    if (isset($_GET['id'])) {
        $id=htmlspecialchars($_GET["id"]);

        $sql="delete from pesanan where id='$id' ";
        $hasil=mysqli_query($kon,$sql);

        //Kondisi apakah berhasil atau tidak
            if ($hasil) {
                header("Location:index.php");

            }
            else {
                echo "<div class='alert alert-danger'> Data Gagal dihapus.</div>";

            }
        }
?>


     <tr class="table-danger">
            <br>
        <thead>
        <tr>
        
        
       <table class="my-3 table table-bordered">
            <tr class="table-primary">           
            <th>No</th>
            <th>Nama</th>
            <th>Nomor Handphone</th>
            <th>Alamat</th>
            <th>Pesanan</th>
            <th colspan='2'>Aksi</th>

        </tr>
        </thead>

        <?php
        include "koneksi.php";
        $sql="select * from pesanan order by id desc";

        $hasil=mysqli_query($kon,$sql);
        $no=0;
        while ($data = mysqli_fetch_array($hasil)) {
            $no++;

            ?>
            <tbody>
            <tr>
                <td><?php echo $no;?></td>
                <td><?php echo $data["nama"]; ?></td>
                <td><?php echo $data["no"];   ?></td>
                <td><?php echo $data["alamat"];   ?></td>
                <td><?php echo $data["pesanan"];   ?></td>
                <td>
                    <a href="update.php?id=<?php echo htmlspecialchars($data['id']); ?>" class="btn btn-primary" role="button">Edit</a>
                    <a href="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>?id=<?php echo $data['id']; ?>" class="btn btn-danger" role="button">Hapus</a>
                </td>
            </tr>
            </tbody>
            <?php
        }
        ?>
    </table>
    <a href="create.php" class="btn btn-primary" role="button">Tambah</a>
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
