<?php
$con=mysqli_connect('localhost','root','');
if(mysqli_select_db($con,'def'));
$sql="TRUNCATE TABLE ghi";
$records=mysqli_query($con,$sql);
?>
