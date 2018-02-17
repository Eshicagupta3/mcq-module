<?php
@session_start();
$rid=$_SESSION['id'];
require 'connect.php';
$id=$_POST['l'];
$query_run3=mysqli_query($conn,"SELECT * FROM try where qid='$id' and rid='$rid'");

 $row3=@mysqli_fetch_assoc($query_run3);
echo $row3['ans'];

?>
