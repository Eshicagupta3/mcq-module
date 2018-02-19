<?php
@session_start();

require 'connect.php';
$email=@$_POST['lemail'];
$pass=@$_POST['lpass'];
$query1="SELECT * FROM signup WHERE email ='$email' AND password='$pass'";
$query_run1=@mysqli_query($conn,$query1);
if(@mysqli_num_rows($query_run1)>0)
{
 $row1=@mysqli_fetch_assoc($query_run1);
 $id=$row1['id'];
	  $query="SELECT * FROM login WHERE rid='$id'";
$query_run=@mysqli_query($conn,$query);
if(@mysqli_num_rows($query_run)>0)
{
	
	header('location: login.php');

}
else{
	$_SESSION['id']=$id;
	  $query2="insert into login values('','$email','$id')";
$query_run2=@mysqli_query($conn,$query2);
header('location: instructions.php');	
}	
}
else
{
	require 'login.php';
	echo "<script type='text/javascript'>
            alert('user name or password incorrect')
            </script>";
}
?>