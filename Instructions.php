<?php
session_start();
if(isset($_SESSION['login']))
{
  header('location: question1.php');
}
if(!$_SESSION['id']){
header('location: signup.php');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Instructions</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/mdb.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/Instructions.css" rel="stylesheet">
</head>

<body class="fixed-sn animated fadeIn">

    <header>
        <nav class="navbar navbar-expand-lg navbar-dark elegant-color">
            <a href="http://jssmmil.in/" class="navbar-brand" title="MMIL website"><img src="assets/img/logo.png">
                <p id="head">MMIL</p>
            </a>
             <ul class="nav navbar-nav nav-flex-icons ml-auto">
                <li class="nav-item">
                    <form name="signout" action="signout.php">
                      <input type="submit" value="Submit Test" style=" margin-top: 1rem;
    background-color: lightgrey;
    border: 1px solid grey;
    color: black;
    padding: 1rem 1rem;">
                    </form>                    
                </li>
            </ul>
    </header>
    <main class="container">
      <div class="row">
        <div class="col-lg-2 col-md-2"></div>
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
           <div class="jumbotron">        
              <h1 class="h1-responsive">Welcome</h1>
              <h4 class="h4-responsive">Rules and Instructions</h4>
              <ul>
                  <li>No negative marking.</li>
                  <li>Duration of test is 30 minutes. Time will start on the commencement of test.</li>
                  <li>Answer of a particular question will be submitted only after next button is pressed.</li>
              </ul>
              <h4 class="h4-responsive">Terms and Conditions</h4>
              <ul>
                  <li>Decision of the judges will be considered final.</li>
                  <li>Society holds the power of disqualifying any individual in case of any unethical activity.</li>
              </ul>
             
              <button type="button" id="but" class="but"><a href="question1.php"?>Start the test</button>
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
    <script type="text/javascript">
     $(document).ready(function(){
        $(".but").click(function(){
    $("#but").attr('disabled', 'disabled');
  });
      });
    </script>
</body>

</html>