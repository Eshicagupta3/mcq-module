<?php
session_start();
$k=$_POST['item'];
  
  $_SESSION['no']=$k;
header('location: question1.php');
?>