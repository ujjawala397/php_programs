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
$sql = "UPDATE store SET Email='Rahul@gmail.com' WHERE Name='tfguyiu' ";
if(mysqli_query($con,$sql))
{
	echo "updated";
}
else
{
	echo "failed to update";
}