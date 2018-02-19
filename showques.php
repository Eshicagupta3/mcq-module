<?php
require 'connect.php';
$query_run1=@mysqli_query($conn,"select * from questions");
if(@mysqli_num_rows($query_run1)>0)
{
    while($row1=@mysqli_fetch_assoc($query_run1))
    {
    	$id=$row1['id'];
    
    echo "<form method='post' name='delete1' action=''>
 
    <input type='hidden' name='iname'   value='" .$id ."'/>
 <button name='del1' id='mySubmit' style='float: right;
    color: black;
    background-color: transparent;
    border: none;
    font-size: 30px;
    cursor:pointer;
    outline: none;'>&times;</button>

    </form>";
$q=$row1['question'];
$a=$row1['ans'];
echo "<b>".$id.") ".$q."</b><br><br>ans= ".$a;
echo "<br><hr><br>";
}}
?>