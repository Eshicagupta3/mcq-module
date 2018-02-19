<?php
@session_start();
if(isset($_SESSION['auser']))
{
header('location: addques.php');
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Admin Panel</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/mdb.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/admin.css" rel="stylesheet">
</head>
<body class="fixed-sn animated fadeIn">

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark elegant-color">
            <a href="http://jssmmil.in/" class="navbar-brand" title="MMIL Website"><img src="assets/img/logo.png">
                <p id="head">MMIL</p>
            </a>
            <ul class="nav navbar-nav nav-flex-icons ml-auto">
                <li class="nav-item">
                    <a href="index.php" class="nav-link">
                        <i class="fa fa-home"></i>
                        <span class="clearfix d-none d-sm-inline-block">Home</span>
                    </a>
                </li>
                 <li class="nav-item">
                    <a href="admin.php" class="nav-link">
                        <i class="fa fa-user"></i>
                        <span class="clearfix d-none d-sm-inline-block">Admin</span>
                    </a>
                </li>
            </ul>
        </nav>
    </header>
     <main class="container animated fadeIn">
      <div class="row">
        <div class="col-lg-2 col-md-2"></div>
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
           <div class="jumbotron">        
              <h1 class="h1-responsive" align="center">ADMIN PANEL</h1>
              <hr>
              <form action="adminlogin.php" method="post">
                  <div class="md-form">
                     <i class="fa fa-envelope prefix grey-text"></i>
                     <input type="text" id="defaultForm-email" class="form-control" placeholder="name" name="auser" required>
                  </div>
                  <div class="md-form">
                     <i class="fa fa-lock prefix grey-text"></i>
                     <input type="password" id="defaultForm-pass" class="form-control" placeholder="Password" name="apass" required>
                  </div>
                  <div class="text-center">
                    <input type="submit" name="admin">
                  </div>
               </form>
           </div>
        </div>
      </div>
    </main>
</body>
</html>