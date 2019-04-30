<?php
$con=mysqli_connect('localhost','root','');
if(!$con)
{
	echo "Not connected";
}
if(!mysqli_select_db($con,'form'))
{
	echo "database not selected";
}
$Name=$_POST['name'];
$Email=$_POST['email'];
$sql="INSERT INTO store (Name,Email) VALUES ('$Name','$Email')";
if(mysqli_query($con,$sql))
{
	echo "data insert";
}
?>