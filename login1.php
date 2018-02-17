<?php
session_start();
require 'connect.php';
$email=@$_POST['lemail'];
$pass=@$_POST['lpass'];
$query1="SELECT * FROM signup WHERE email ='$email' AND password='$pass'";
$query_run1=@mysqli_query($conn,$query1);
if(@mysqli_num_rows($query_run1)>0)
{
 $row1=@mysqli_fetch_assoc($query_run1);
 $id=$row1['id'];
	  $_SESSION['id']=$id;
	  
	header('location: question1.php');	
}
else
{
	require 'login.php';
	echo "<script type='text/javascript'>
            alert('user name or password incorrect')
            </script>";
}
?>