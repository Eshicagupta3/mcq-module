<?php
@session_start();
require 'connect.php';
?>
<?php 
$sname=@mysqli_real_escape_string($conn,@$_POST['sname']);
$sbranch=@mysqli_real_escape_string($conn,@$_POST['sbranch']);
$syear=@mysqli_real_escape_string($conn,@$_POST['syear']);
$semail=@mysqli_real_escape_string($conn,@$_POST['semail']);
$spass=@mysqli_real_escape_string($conn,@$_POST['spass']);
$srpass=@mysqli_real_escape_string($conn,@$_POST['srpass']);
if($spass!=$srpass){
require 'signup.php';
echo "<script type='text/javascript'>
            alert('password not match')
            </script>";
	}

	


$query_run3=@mysqli_query($conn,"SELECT * FROM signup where email='$semail'");
 if(@mysqli_num_rows($query_run3)>0)
{
	require 'signup.php';
echo "<script type='text/javascript'>
            alert('email already exist')
            </script>";
}
if (!filter_var($semail, FILTER_VALIDATE_EMAIL)) {
 require 'signup.php';
echo "<script type='text/javascript'>
            alert('email not valid')
            </script>";
        }
else{
$query4="insert into signup values('','$sname','$sbranch','$syear','$semail','$spass','$srpass')";
$query_run4=@mysqli_query($conn,$query4);

$query1="SELECT * FROM signup WHERE email ='$semail' AND password='$spass'";
$query_run1=@mysqli_query($conn,$query1);
if(@mysqli_num_rows($query_run1)>0)
{
 $row1=@mysqli_fetch_assoc($query_run1);
 $id=$row1['id'];
	  
}$_SESSION['id']=$id;
	
	  $query2="insert into login values('','$semail','$id')";
$query_run2=@mysqli_query($conn,$query2);
$_SESSION['	no']=1;
header('location: instructions.php');	
}	


?>