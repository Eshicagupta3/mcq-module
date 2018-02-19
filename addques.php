<?php
session_start();
require 'connect.php';
if($_SESSION['auser'])
{}
else{
    header('location: index.php');
}
if(isset($_POST['del1']))
{
  $m=$_POST['iname'];
  $query_run3=@mysqli_query($conn,"DELETE FROM questions WHERE id='$m'");
}

?>
<html>
 <head>
 	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/font-awesome/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <style type="text/css">
       div#added_ques{
          margin-left: 25rem;
          margin-top: -3rem;
       }
    </style>
 <script>

function submitMessage() {
  var xhttp;
  var ques=form1.ques1.value;
  var a=form1.a.value;
  var b=form1.b.value;
  var c=form1.c.value;
  var d=form1.d.value;
var ans=form1.ans1.value;
var no=form1.order.value;
  var  the_data='ques='+ques+'&ans='+ans+'&no='+no+'&a='+a+'&b='+b+'&c='+c+'&d='+d;
  xhttp = new XMLHttpRequest();
      xhttp.open('POST','insertques.php',true);
       xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded"); 
  xhttp.onreadystatechange=function() {
    if (xhttp.readyState==4 && xhttp.status==200) {
      document.getElementById('').innerHTML = xhttp.responseText;
    }
  }

  xhttp.send(the_data); 
}
$(document).ready(function(){
setInterval(function(){
  $.ajaxSetup({cache:false});
  
   $('#questions').load("showques.php");
}, 500);

});
</script>
</head>
<body> <form name="signout" action="signoutadmin.php" style="float: right">
                      <input type="submit" value="Sign Out">
                    </form>  
                   <a href="adminhome.php" class="nav-link">
                        <i class="fa fa-user"></i>
                        <span class="clearfix d-none d-sm-inline-block">leader board</span>
                    </a> 
	<div class="container">
		<div class="row">
			<div class="col-xs-5">
<h1>Add Questions</h1>
<form name="form1" method="post">
	Question Box:<textarea class="ques1" name="ques1" rows="10" style="width: 100%;" required></textarea><br><br>
  Option a: <input type="text" class="a" name="a" required/><br><br>
  Option b: <input type="text" class="b" name="b" required/><br><br>
  Option c: <input type="text" class="c" name="c" required/><br><br>
  Option d: <input type="text" class="d" name="d" required/><br><br>
	Correct Answer: <input type="text" class="ans1" name="ans1" required/><br><br>
	Question number: <input type="number" name="order" class="order" required /><br><br><br>
	<input type="submit" name="done" onclick="submitMessage()" value="Submit"/><br>
</form>
</div>
<div class="col-xs-5" id="added_ques"><br><br>
  <h1>Questions Added</h1><br>
  <p id="questions"></p>
</div>
</div>
</div>
</html>