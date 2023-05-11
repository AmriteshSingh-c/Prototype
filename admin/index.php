<?php

session_start();

if (isset($_SESSION['id_admin'])) {
  header("Location: dashboard.php");
  exit();
}

?>
<!DOCTYPE html>
<html>

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Placement Portal</title>
  <!-- <link href="../img/logo.png" rel="icon"> -->
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="../css/AdminLTE.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/skins/square/blue.css">

  <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->

  <script src="https://cdn.tailwindcss.com"></script>

  <!-- Google Font -->
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="">


  <?php
  include '../uploads/admin_header.php';
  ?>
  <div class="login-box content:centre"
    style="display:flex;flex-direction:column;justify-content:center;margin-top:200px;">
    <div class="login-logo">
      <a href="../index.php" style="color:black"><b>Placement Portal</b></a>
    </div>
    <!-- /.login-logo -->
    <div class=" login-box-body bg-blue-300 text-black text-xl">
      <p class="text-white text-2xl login-box-msg text-black">Admin Login</p>

      <form method="post" action="checklogin.php">
        <div class="form-group has-feedback">
          <input type="text" id="large" name="username" class="form-control" placeholder="Username">
          <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
        </div>
        <div class="form-group has-feedback">
          <input type="password" id="large" name="password" class="form-control" placeholder="Password">
          <span class="glyphicon glyphicon-lock form-control-feedback"></span>
        </div>
        <style>
          #large {
            font-size: medium;
          }
        </style>
        <div class="row">

          <!-- /.col -->
          <div class="col-xs-4">
            <button type="submit" name="submit"
              class="flex mx-auto mt-6 text-white bg-indigo-500 border-0 py-2 px-5 focus:outline-none hover:bg-indigo-600 rounded"
              style="background-color:#3db166;">Sign In</button>
          </div>
          <?php
          //If User Failed To log in then show error message.
          if (isset($_SESSION['loginError'])) {
            ?>
            <div>
              <p class="text-center">Invalid Email/Password! Try Again!</p>
            </div>
            <?php
            unset($_SESSION['loginError']);
          }
          ?>

      </form>
    </div>
    <!-- /.login-box-body -->
  </div>



  <!-- add footer -->



  </div>
  <!-- /.login-box -->


  <!-- jQuery 3 -->
  <script src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <!-- Bootstrap 3.3.7 -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <!-- AdminLTE App -->
  <script src="../js/adminlte.min.js"></script>
  <!-- iCheck -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/iCheck/1.0.2/icheck.min.js"></script>

</body>

</html>