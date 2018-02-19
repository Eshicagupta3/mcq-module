<?php
require 'connect.php';
$query_run=@mysqli_query($conn,"SELECT * FROM result order by marks desc");
?>
<div class="row">
	<div class="col-sm-3"><b><u>ID</u></b></div>
	<div class="col-sm-3"><b><u>NAME</u></b></div>
	<div class="col-sm-3"><b><u>EMAIL</u></b></div>
	<div class="col-sm-3"><b><u>MARKS</u></b></div>
</div>
<hr><br>
    <div class="row">

	<?php
while($row=@mysqli_fetch_assoc($query_run))
{
	$rid=$row['rid'];
	$k=$row['marks'];


$query_run1=mysqli_query($conn,"SELECT * FROM signup where id='$rid'");
$row1=@mysqli_fetch_assoc($query_run1);

?>
<div class="col-sm-3"><b><?php echo $rid;?></b></div>	 
<div class="col-sm-3"><b><?php echo $row1['name'];?></b></div>
<div class="col-sm-3"><b><?php echo $row1['email'];?></b></div>		

<?php

?>


<div class="col-sm-3"><b><?php echo $k;?></b></div>
<?php
echo "<br>";

}

?>
</div>