<?php
   ob_start();
   session_start();
?>

<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>SB Admin - Login</title>

  <!-- Custom fonts for this template-->
  <link href="./admin/vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template-->
  <link href="./admin/css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">

  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header text-center">Create New password</div>
  <div class="card-body">
        <form action="inc/newpass.php" method="POST">
          <div class="form-group">
          <div class="form-label-group">
              <input type="password" name="password" id="inputPassword" class="form-control" required="required">
              <label for="inputPassword">Password</label>
            </div>
          </div>
          <div class="form-group">
            <div class="form-label-group">
              <input type="password" name="repassword" id="inputPassword" class="form-control" required="required">
              <label for="inputPassword">Confirm Password</label>
            </div>
          </div>
          <!-- <button class="btn btn-primary" type="submit">Login</button> -->
          <button class=" btn btn-primary btn-block" type="submit"> Submit </button>

        </form>
        <div class="text-center">

          <a class="d-block small mt-3" href="index.php">Go to Home <i class="fas fa-arrow-right"></i></a>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="./admin/vendor/jquery/jquery.min.js"></script>
  <script src="./admin/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="./admin/vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
