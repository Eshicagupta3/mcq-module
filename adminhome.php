<?php
@session_start();
require 'connect.php';
if($_SESSION['auser'])
{}
else{
    header('location: index.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/mdb.min.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="assets/css/.css" rel="stylesheet">
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
    <script>
    
  $(document).ready(function(){
setInterval(function(){
    
  $.ajaxSetup({cache:false});
  
   $('#show1').load("result.php");
}, 500);

});
</script>

</head>
<body>
  <form name="signout" action="signoutadmin.php" style="float: right">
                      <input type="submit" value="Sign Out">
                    </form>  
                   <a href="addques.php" class="nav-link">
                        <i class="fa fa-user"></i>
                        <span class="clearfix d-none d-sm-inline-block">Add Ques</span>
                    </a> 
<div class="container">
  <div class="row">
    <div class="col-sm-4"></div>

  <div class="col-sm-8"><p id="show1"></p></div>
  </body>
  </html>