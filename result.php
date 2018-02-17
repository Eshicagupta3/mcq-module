<?php
@session_start();
$id=$_SESSION['id'];
$k=0;
require 'connect.php';
$query_run3=mysqli_query($conn,"SELECT * FROM try where rid='$id'");
 while($row3=@mysqli_fetch_assoc($query_run3)){
$ans=$row3['ans'];
$qid=$row3['qid'];
$query_run2=mysqli_query($conn,"SELECT * FROM questions where id='$qid'");
 $row2=@mysqli_fetch_assoc($query_run2);
$cans=$row2['ans'];
if($ans==$cans)
{
	$k=$k+1;
}
}
echo $k;
?>