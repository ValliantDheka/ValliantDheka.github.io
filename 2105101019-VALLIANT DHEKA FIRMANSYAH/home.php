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
            <!-- <a class="nav-link active fw-medium" aria-current="page" href="#home">Home</a> -->
            <!-- fw-medium ini font weight agar tidak terlalu tebal -->
            <a class="nav-link" href="#maint">Home</a>
            <a class="nav-link" href="#about">About</a>
            <a class="nav-link" href="#product">Product</a>
            <a class="nav-link" href="#contact">Contact</a>
            <a class="nav-link" href="login.php">Admin</a>
          </div>
        </div>
      </div>
    </nav>
    <!-- akhir navbar -->
    <br></br><br></br><br></br>
    <!-- main conten -->
    <section id="main">
      <div class="container" style="margin-top: 5em">
        <div class="row">
          <div class="col-6 d-flex align-items-center">
            <div>
              <!-- kita buat div ini agar yang di d-flex hanya yang kolom -->
              <h1 class="fs-1 fw-bold font-poppins">Selamat Datang DI Website Sastro Wiyono</h1>
              <!-- fs-1 ini paling besar kalau kecil fs-6 -->
              <p class="font-poppins" style="color: #ffffff">SW said : "Kamu boleh melupakanku tapi jangan melupakan kesehatanmu". Diet tidak perlu, makan nomor SATU.</p>
              <!-- <button type="button" class="btn btn-primary px-4 py-2 font-poppins">Pesan Sekarang</button> -->
              <a class="btn btn-primary px-4 py-2 font-poppins" href="#contact" role="button">Pesan Sekarang</a>
            </div>
          </div>
          <div class="col-6 text-end">
            <img src="aseets/img/logo.png" alt="SW" width="480px" />
          </div>
        </div>
        <div class="row mt-5 font-poppins">
          <div class="col-6 d-flex gap-5 align-items-center">
            <div>
              <!-- div ini agar border tidak kepanjangan -->
              <div class="d-flex flex-column ps-2" style="border-left: 4px solid #814e2b">
                <span class="fw-bold fs-4" style="color: #ffffff">1k+</span>
                <span class="fw-medium fs-5">Pelanggan Senang</span>
              </div>
            </div>
            <div>
              <!-- div ini agar border tidak kepanjangan -->
              <div class="d-flex flex-column ps-2" style="border-left: 4px solid #814e2b">
                <span class="fw-bold fs-4" style="color: #ffffff">20+</span>
                <span class="fw-medium fs-5">Cabang Outlet</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Akhir main conten -->

    <!-- about -->
    <section id="about">
      <div class="container">
        <div class="row font-poppins">
          <div class="col-7">
            <img src="aseets/img/order_image.png" alt="about" width="720px" />
          </div>
          <div class="col-5 d-flex align-items-center">
            <div>
              <h1 class="fw-bold">About</h1>
              <p style="color: #ffffff">Kami adalah tempat di mana anda merasa lapar, keramahan, dan semangat komunitas berkumpul untuk menciptakan pengalaman makan yang tak terlupakan.</p>
              <p style="color: #ffffff">
                kami berkomitmen untuk menyajikan makanan terbaik dari berbagai sudut dunia. Setiap bahan dipilih dengan cermat dan diolah dengan teliti untuk menghadirkan cita rasa yang khas dan nikmat dalam setiap menu.
              </p>
              <!-- <button type="button" class="btn btn-primary px-5 py-2 font-poppins mt-5" style="font-size: 15px">Jelajahi</button> -->
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir about -->

    <!-- product -->
    <section id="product">
      <div class="container font-poppins">
        <div class="row">
          <div class="col mt-5">
            <h1 class="fw-bold text-center font-poppins" style="font-size: 32px">Product</h1>
          </div>
        </div>
        <div class="row" style="transform: translateX(2em)">
          <div class="col mt-5">
            <div class="card" style="width: 18rem; height: 35rem; transform: translateX(-1em); border-color: #814e2b">
              <img src="aseets/img/product/buger.jpg" style="transform: scale(0.9); height: 220px" class="card-img-top" alt="gambar 1" />
              <div class="card-body">
                <h5 class="card-title">Hamburger</h5>
                <p class="card-text">Hamburger merupakan roti bundar yang diisi dengan patty daging. Di dalamnya terdapat sayuran seperti selada, tomat, dan bawang bombai. Untuk sausnya, ada berbagai saus seperti mayones, tomat, sambal, dan mustard.</p>
                <a href="#contact" class="btn btn-primary" style="transform: translateY(23px)">Pesan</a>
              </div>
            </div>
          </div>
          <div class="col mt-5">
            <div class="card" style="width: 18rem; height: 35rem; transform: translateX(-1em); border-color: #814e2b">
              <img src="aseets/img/product/pizza.jpg" style="transform: scale(0.9); height: 220px" class="card-img-top" alt="gambar 2" />
              <div class="card-body">
                <h5 class="card-title">Pizza</h5>
                <p class="card-text">Pizza adalah roti bulat yang dilapisi dengan saus tomat dan keju. Biasanya di atasnya diberi beragam topping seperti pepperoni, jamur, paprika, dan olive. Varian lainnya mencakup keju tambahan, daging, atau sayuran sesuai selera.</p>
                <a href="#contact" class="btn btn-primary" style="transform: translateY(23px)">Pesan</a>
              </div>
            </div>
          </div>
          <div class="col mt-5">
            <div class="card" style="width: 18rem; height: 35rem; transform: translateX(-1em); border-color: #814e2b">
              <img src="aseets/img/product/Hot_dog.jpg" style="transform: scale(0.9); height: 220px" class="card-img-top" alt="gambar 3" />
              <div class="card-body">
                <h5 class="card-title">Hot Dog</h5>
                <p class="card-text">Hot dog adalah sosis daging yang disajikan di dalam roti panjang. Umumnya diberi topping seperti mustard, saus tomat, bawang goreng, dan acar. Bisa juga ditambahkan dengan keju parut, daging cincang, atau saus lainnya sesuai preferensi.</p>
                <a href="#contact" class="btn btn-primary">Pesan</a>
              </div>
            </div>
          </div>
          <div class="col mt-5">
            <div class="card" style="width: 18rem; height: 35rem; transform: translateX(-1em); border-color: #814e2b">
              <img src="aseets/img/product/pasta.jpg" style="transform: scale(0.9); height: 220px" class="card-img-top" alt="gambar 4" />
              <div class="card-body">
                <h5 class="card-title">Pasta</h5>
                <p class="card-text">Pasta adalah hidangan gandum yang dimasak dan disajikan dengan beragam saus seperti bolognese, carbonara, atau pesto. Biasanya ditambahkan dengan daging, sayuran, atau keju sesuai selera.</p>
                <a href="#contact" class="btn btn-primary" style="transform: translateY(23px)">Pesan</a>
              </div>
            </div>
          </div>
          <div class="col mt-4">
            <div class="card" style="width: 18rem; height: 35rem; transform: translateX(-1em); border-color: #814e2b">
              <img src="aseets/img/product/ice_cream.jpg" style="transform: scale(0.9); height: 220px" class="card-img-top" alt="gambar 1" />
              <div class="card-body">
                <h5 class="card-title">Ice Cream</h5>
                <p class="card-text">Ice cream adalah pencuci mulut dingin dari campuran susu, gula, dan krim, ada beragam rasa seperti cokelat, vanilla, dan stroberi. Disajikan dalam cone atau cup dengan tambahan topping saus, kacang-kacangan, atau buah.</p>
                <a href="#contact" class="btn btn-primary" style="transform: translateY(23px)">Pesan</a>
              </div>
            </div>
          </div>
          <div class="col mt-4">
            <div class="card" style="width: 18rem; height: 35rem; transform: translateX(-1em); border-color: #814e2b">
              <img src="aseets/img/product/juse.jpg" style="transform: scale(0.9); height: 220px" class="card-img-top" alt="gambar 1" />
              <div class="card-body">
                <h5 class="card-title">Juice</h5>
                <p class="card-text">Juice adalah minuman dari sari buah atau sayuran yang diperas. Tersedia dalam berbagai varian seperti jus jeruk, apel, atau wortel. Segar dan kaya akan nutrisi serta bisa disajikan dengan tambahan es.</p>
                <a href="#contact" class="btn btn-primary" style="transform: translateY(23px)">Pesan</a>
              </div>
            </div>
          </div>
          <div class="col mt-4">
            <div class="card" style="width: 18rem; height: 35rem; transform: translateX(-1em); border-color: #814e2b">
              <img src="aseets/img/product/chocolate_Drink.jpg" style="transform: scale(0.9); height: 220px" class="card-img-top" alt="gambar 1" />
              <div class="card-body">
                <h5 class="card-title">Chocolate</h5>
                <p class="card-text">Minuman cokelat adalah minuman hangat atau dingin yang terbuat dari kombinasi bubuk cokelat susu atau air. Memiliki rasa manis cokelat dan bisa ditambahkan dengan marshmallow atau whipped cream sebagai hiasan.</p>
                <a href="#contact" class="btn btn-primary" style="transform: translateY(23px)">Pesan</a>
              </div>
            </div>
          </div>
          <div class="col mt-4">
            <div class="card" style="width: 18rem; height: 35rem; transform: translateX(-1em); border-color: #814e2b">
              <img src="aseets/img/product/riseretto.png" style="transform: scale(0.9); height: 220px" class="card-img-top" alt="gambar 1" />
              <div class="card-body">
                <h5 class="card-title">Coffe</h5>
                <p class="card-text">Coffe adalah minuman panas atau dingin yang dihasilkan dari biji kopi yang disangrai dan digiling. Tersedia dalam berbagai varietas seperti espresso, americano, latte, atau cappuccino. Bisa disajikan dengan tambahan susu, gula.</p>
                <a href="#contact" class="btn btn-primary" style="transform: translateY(23px)">Pesan</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir product -->
    
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
              header("Location:home.php");
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
              <button type="submit" class="btn btn-primary px-5 py-2">Pesan</button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <!-- akhir contact -->
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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  </body>
</html>
