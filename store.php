<?php

$con=mysqli_connect('localhost','root','');
if(!$con)
{
	echo "Not Connected";
}
if(!mysqli_select_db($con,'form'))
{
	echo "Not Selected";
}

$Name=$_POST['name'];
$Email=$_POST['email'];
$sql="INSERT INTO store (Name,Email) VALUES ('$Name','$Email')";



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



