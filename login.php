<?php
@session_start();
$_SESSION['no']=1;
if(isset($_SESSION['id']))
{
header('location: instructions.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Form-LogIn</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/mdb.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/Form-LogIn.css" rel="stylesheet">
    <style type="text/css">
       input[type="submit"] {
         width: 50%;
         padding: 0.5rem;
         background-color: #b71c1c;
         border: none;
         color: white;
         border-radius: 2px;
         text-transform: uppercase;
         letter-spacing: 2px;
         outline: none;
       }
       .card{
          margin-bottom: 6rem;
       }
    </style>
</head>

<body class="fixed-sn animated fadeIn">

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark elegant-color">
            <a href="http://jssmmil.in/" class="navbar-brand" title="MMIL Website"><img src="assets/img/logo.png">
                <p id="head">MMIL</p>
            </a>
        </nav>S
    </header>
    <main class="container">
      <div class="row">
          <div class=" col-lg-3 col-md-3"></div>
          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12">
            <div class="jumbotron">
               <form method="post" action="login1.php">
                  <div class="card text-center z-depth-2">
                    <div class="card-body">
                      <p class="white-text mb-0">Sign In</p>
                    </div>
                  </div>
                  <div class="md-form">
                     <i class="fa fa-envelope prefix grey-text"></i>
                     <input type="text" id="defaultForm-email" class="form-control" name="lemail" required>
                     <label for="defaultForm-email">Email</label>
                  </div>
                  <div class="md-form">
                     <i class="fa fa-lock prefix grey-text"></i>
                     <input type="password" id="defaultForm-pass" class="form-control" name="lpass" required>
                     <label for="defaultForm-pass">Password</label>
                  </div>
                  <div class="text-center">
                     <input type="submit" value="Log In" name="submitlogin">
                  </div>
               </form>
            </div>
          </div>
      </div>
    </main>
    <footer class="page-footer elegant-color center-on-small-only">
        <div class="footer-copyright">
            <div class="container-fluid">
                © 2018 Copyright:
                <a href="http://jssmmil.in/"> Microsoft Mobile Innovation Labs</a>

            </div>
        </div>
    </footer>

    <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
</body>

</html>