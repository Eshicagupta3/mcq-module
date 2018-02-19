<?php
session_start();
/*if($_SESSION['auser'])
{
	header('location: index.php');
}
else{
    header('location: adminhome.php');
}*/
require 'connect.php';
$auser=@$_POST['auser'];
$apass=@$_POST['apass'];
$query1="SELECT * FROM admin WHERE username ='$auser' AND password='$apass'";
$query_run1=@mysqli_query($conn,$query1);
if(@mysqli_num_rows($query_run1)>0)
{
 $row1=@mysqli_fetch_assoc($query_run1);

	  $_SESSION['auser']=$auser;
	  
	header('location: addques.php');	
}
else
{
	require 'admin.php';
	echo "<script type='text/javascript'>
            alert('user name or password incorrect')
            </script>";
}
?>