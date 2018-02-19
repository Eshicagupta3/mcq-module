
<?php
session_start();
require 'connect.php';
$c=$_SESSION['no'];
$query_run1=@mysqli_query($conn,"select * from questions where id=$c");
if(@mysqli_num_rows($query_run1)>0)
{
    $row1=@mysqli_fetch_assoc($query_run1);
$id=$row1['id'];
$q=$row1['question'];
    	echo $id.") ".$q;
    	echo"<br>";
    	echo "a) ".$row1['a']."<br>b) ".$row1['b']."<br>c) ".$row1['c']."<br>d) ".$row1['d']."<br>";

}
?>
<form action="question.php" method="post">
	<input type="submit" name="next" value="next">

</form>
<form action="question.php" method="post">
	
	<input type="submit" name="back" value="back">
</form>
<?php
if(isset($_POST['next']))
{
	$k=$_SESSION['no'];
	$k=$k+1;
	$_SESSION['no']=$k;
}
if(isset($_POST['back']))
{
	$k=$_SESSION['no'];
	$k=$k-1;
	$_SESSION['no']=$k;
}
?>
