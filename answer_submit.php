<?php
@session_start();
$id=$_SESSION['id'];
require 'connect.php';
$k=$_POST['k'];
$ans=$_POST['ans'];

$query2="SELECT * FROM try WHERE qid='$k' and rid='$id'";
$query_run2=mysqli_query($conn,$query2);
if(mysqli_num_rows($query_run2)>0)
{
	$query_run=mysqli_query($conn,"update try set ans='$ans' where qid='$k' and rid='$id'");
}
else{
$query1="insert into try values('','$id','$k','$ans')";
$query_run1=mysqli_query($conn,$query1);
}
?>