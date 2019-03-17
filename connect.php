<?php

$con=mysqli_connect('localhost','root','');
if(!$con)
{
	echo "Not Connected";
}
if(!mysqli_select_db($con,'e-commerce'))
{
	echo "Not Selected";
}

$Name=$_POST['name'];
$Email=$_POST['email'];
$Pass=$_POST['pass'];


$sql="INSERT INTO juju_spices (Name,Email,Password) VALUES ('$Name','$Email','$Pass')";
if(!mysqli_query($con,$sql))
{
	echo "Not Inserted";
}
else
{
	echo "Inserted";
}

//the page will be redirected to home page
header("refresh:2;url=form.html");

?>