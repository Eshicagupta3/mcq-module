<?php
@session_start();
require 'connect.php';
$id=$_SESSION['id'];
$k=$_POST['k'];
$ans=$_POST['ans'];
$query2="SELECT * FROM try WHERE qid='$k' and rid='$id'";
$query_run2=mysqli_query($conn,$query2);
if(mysqli_num_rows($query_run2)>0)
{
	$query_run=mysqli_query($conn,"update try set ans='$ans' where qid='$k' and rid='$id'");
}
else{
$query3="insert into try values('','$id','$k','$ans')";
$query_run3=mysqli_query($conn,$query3);
}
$query_run1=@mysqli_query($conn,"select max(id) from questions");
 $row1=@mysqli_fetch_assoc($query_run1);
  $m=$row1['max(id)'];
  $k=$_SESSION['no'];
  $k=($k+1)%($m+1);
  if($k==0){
  	$k=1;
  }
  $_SESSION['no']=$k;
?>