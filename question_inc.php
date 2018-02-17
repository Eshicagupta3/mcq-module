<?php
session_start();

  $k=$_SESSION['no'];
  $k=$k+1;
  $_SESSION['no']=$k;
?>