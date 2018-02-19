<?php
@session_start();
require 'connect.php';
$rid=$_SESSION['id'];
$k=0;
$query_run3=mysqli_query($conn,"SELECT * FROM try where rid='$rid'");
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

$query2="insert into result values('','$rid','$k')";
$query_run2=@mysqli_query($conn,$query2);
session_destroy();
//header('location: try.php');
?>
    <script type="text/javascript" src="assets/js/jquery-3.2.1.min.js"></script>
    <script type="text/javascript" src="assets/js/popper.min.js"></script>
    <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="assets/js/mdb.min.js"></script>
     <script type="text/javascript" src="jss.js"></script>
<?php

?>