<?php
@session_start();
if(isset($_SESSION['id']))
{
header('location: question1.php');
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Form-SignUp</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/mdb.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/Form-SignUp.css" rel="stylesheet">
    <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
    <script type="text/javascript" src="assets/js/Form.js"></script>
    <script>
function registerForm(){
  if (form1.sname.value == ''||form1.semail.value == ''||form1.sbranch.value == ''||form1.syear.value == '' ||form1.spass.value == '' || form1.srpass.value == ''){
    alert(" please fill required fields");
    return;
  }
    var sname=form1.sname.value ;
  var sbranch=form1.sbranch.value ;
 var syear=form1.syear.value ;
 var semail=form1.semail.value ;
 var spass=form1.spass.value ;
 var srpass=form1.srpass.value ;
 
 if(spass!=srpass){
   alert(" password not match");
    return;
 }
 if (/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(semail))
  {
  
  }else{
    alert("You have entered an invalid email address!")
    return;
}
  var  the_data='sname='+sname+'&sbranch='+sbranch+'&syear='+syear+'&semail='+semail+'&spass='+spass+'&srpass='+srpass;
  var xhttp;
  xhttp = new XMLHttpRequest();
      xhttp.open('POST','signup1.php',true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
  xhttp.onreadystatechange=function() {
    if (xhttp.readyState==4 && xhttp.status==200) {
      document.getElementById('').innerHTML = xhttp.responseText;
    }
  }

  xhttp.send(the_data); 
}
    </script>
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
                    <a href="login.php" class="nav-link">
                        <i class="fa fa-sign-in"></i>
                        <span class="clearfix d-none d-sm-inline-block">Sign In</span>
                    </a>
                </li>
            </ul>
    </header>
    <main class="container">
      <div class="row">
          <div class=" col-lg-3 col-md-3"></div>
          <div class="col-lg-9 col-md-9 col-sm-12 col-xs-12"><p><b><?php  if(isset($_SESSION['state']))
                      echo $_SESSION['state'];?></b></p>
            <div class="jumbotron">
               <form method="post" name="form1" action="">
                  <div class="card text-center z-depth-2">
                    <div class="card-body">
                      <p class="white-text mb-0">Sign Up</p>
                    </div>
                  </div>
                   <div class="md-form">
                     <i class="fa fa-user prefix grey-text"></i>
                     <input type="text" id="defaultForm-name" name="sname" class="form-control" placeholder="name">
                     
                  </div>
                  <div class="md-form">
                     <i class="fa fa-book prefix grey-text"></i>
                     <input type="text" id="defaultForm-branch" name="sbranch" class="form-control" placeholder="branch">
                     
                  </div>
                  <div class="md-form">
                     <i class="fa fa-yoast prefix grey-text"></i>
                     <input type="number" id="defaultForm-year" name="syear" class="form-control" placeholder="year">
                    
                  </div>
                
                  <div class="md-form">
                     <i class="fa fa-envelope prefix grey-text"></i>
                     <input type="text" id="defaultForm-email" name="semail" class="form-control" placeholder="email">
                    
                  </div>
                  <div class="md-form">
                     <i class="fa fa-lock prefix grey-text"></i>
                     <input type="password" id="defaultForm-pass" name="spass" class="form-control" placeholder="password">
                    
                  </div>
                  <div class="md-form">
                     <i class="fa fa-lock prefix grey-text"></i>
                     <input type="password" id="defaultForm-confirm_pass" name="srpass" class="form-control" placeholder="confirm password">
                     
                  </div>
                  <div class="text-center">
                     <button onclick="registerForm()">Login</button>               </div>
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

    
</body>

</html>