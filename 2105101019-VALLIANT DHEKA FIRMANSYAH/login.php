<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <!-- <link href="./style.css" rel="stylesheet" /> -->
    <style>
      @import url("https://fonts.googleapis.com/css2?family=Poppins:wght@200&display=swap");
      * {
        padding: 0;
        margin: 0;
        box-sizing: border-box;
      }

      body {
        background: linear-gradient(90deg, rgb(255, 255, 255) 0%, rgb(0, 0, 0) 35%, rgb(255, 255, 255) 100%);
        font-family: "Poppins", sans-serif;
      }
      form {
        border-radius: 20px;
        margin-top: 150px !important;
        width: 24% !important;
        background-color: white !important;
        padding: 50px;
      }

      .btn-primary {
        width: 100%;
        border: none;
        border-radius: 50px;
        background: linear-gradient(90deg, rgb(0, 0, 0) 0%, rgb(0, 0, 0) 35%, rgb(0, 0, 0) 100%);
      }

      .form-control {
        color: rgba(0, 0, 0, 0.87);
        border-bottom-color: rgba(0, 0, 0, 0.42);
        box-shadow: n
        one !important;
        border: none;
        border-bottom: 1px solid;
        border-radius: 4px 4px 0 0;
      }
      h4 {
        font-size: 2rem !important;
        font-weight: 700;
      }
      .form-label {
        font-weight: 800 !important;
      }
      @media only screen and (max-width: 600px) {
        form {
          width: 100% !important;
        }
      }
    </style>
    <title>Login Form</title>
  </head>
  <body>
    <div class="container-fluid">
      <form class="mx-auto">
        <h4 class="text-center">L O G I N</h4>
        <!-- pesan flash -->
        <!-- alert -->
        <div class="mb-3 mt-5">
          <label for="email" class="form-label">Email</label>
          <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Masukkan email" name="email" autocomplete="off" required />
        </div>
        <div class="mb-3">
          <label for="password" class="form-label">Password</label>
          <input type="password" class="form-control" id="password" placeholder="Masukkan password" name="password" autocomplete="off" required />
        </div>
        <a class="btn btn-primary" href="index.php" role="button">Login</a>
      </form>
    </div>

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>
