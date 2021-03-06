<!DOCTYPE html>

<?php
include_once "includes/functions.php";

if (!$_SESSION["loggedin"]) {
    header('Location: login');
}

?>

<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Account Management | NoNameBox</title>
    <link href="assets/bootstrap/css/bootstrap.min.css" type="text/css" rel="stylesheet" />
    <link href="assets/big-picture/css/font-awesome.min.css" type="text/css" rel="stylesheet" />
    <link href="assets/big-picture/css/main.css" type="text/css" rel="stylesheet" />
    <link href="assets/big-picture/css/nnb_custom.css" type="text/css" rel="stylesheet" />
    <link href="assets/css/custom.css" type="text/css" rel="stylesheet" />

  </head>
  <body>
    <?php include "includes/header.php" ?>

    <div class="container">
      <div class="row">
          <div class="col-md-4" >
            <ul class="nav nav-pills nav-stacked nav-bracket">
              <li class="nav-item"><a href="/" title="Home" class="nav-link active"><i class="fa fa-home" aria-hidden="true"></i>Home</a></li>
              <li class="nav-item"><a><a href="personal-information" title="Home" class="nav-link"><i class="fa fa-user" aria-hidden="true"></i>Personal Information</a></a></li>
              <li class="nav-item"><a><a href="password" title="Home" class="nav-link"><i class="fa fa-lock" aria-hidden="true"></i>Password</a></a></li>
            </ul>
          </div>
          <div class="col-md-8">
            <h1>Account Manager</h1>
            <h2>Home</h2>
            <div class="row">
              <p>Here you can modify information on your account. All services on NoNameBox (mail, cloud...) use the same user information, password and login. So you only have to remember one password!</p>
              <hr>
              <div class="container content">
                <div class="row">
                  <div class="col-md-3">
                    <p><strong>Name:</strong></p>
                  </div>
                  <div class="col-md-9">
                    <p>User Name</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <p><strong>Created:</strong></p>
                  </div>
                  <div class="col-md-9">
                    <p>A long time ago...</p>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-3">
                    <p><strong>Last Login:</strong></p>
                  </div>
                  <div class="col-md-9">
                    <p>Today</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
      </div>
    </div>

    <?php include_once "includes/header.php" ?>

    <script src="assets/jquery/jquery-3.2.1.min.js" type="text/javascript"></script>
  </body>
</html>
