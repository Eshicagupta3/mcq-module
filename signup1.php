<?php
session_start();
require 'connect.php';
?>
<?php 
$sname=@mysqli_real_escape_string($conn,@$_POST['sname']);
$sbranch=@mysqli_real_escape_string($conn,@$_POST['sbranch']);
$syear=@mysqli_real_escape_string($conn,@$_POST['syear']);
$semail=@mysqli_real_escape_string($conn,@$_POST['semail']);
$spass=@mysqli_real_escape_string($conn,@$_POST['spass']);
$srpass=@mysqli_real_escape_string($conn,@$_POST['srpass']);
$query_run3=@mysqli_query($conn,"SELECT * FROM signup where email='$semail'");
 if(@mysqli_num_rows($query_run3)>0)
{
	$_SESSION['state']="Email Aready Exist";
}
else{
$query1="insert into signup values('','$sname','$sbranch','$syear','$semail','$spass','$srpass')";
$query_run1=@mysqli_query($conn,$query1);
$_SESSION['state']="Sucessfully Registered";
}?>