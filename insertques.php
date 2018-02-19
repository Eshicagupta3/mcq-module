<?php
require 'connect.php';
$i=$_POST['ques'];
$j=$_POST['ans'];
$n=$_POST['no'];
$a=$_POST['a'];
$b=$_POST['b'];
$c=$_POST['c'];
$d=$_POST['d'];
@mysqli_query($conn,"insert into questions values('','$n','$i','$a','$b','$c','$d','$j')");

?>