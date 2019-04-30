<?php
$g=mysqli_connect('localhost','root','','hd');
if(!$g)
{
	echo "connection is not done";
}
else
{
	echo "connection is done";
}
if(isset($_POST["submit"]))
{
	extract($_POST);

$a=	$_POST["first_name"];
$b=$_POST['last_name'];
$c=$_POST['reg_no'];
$d=$_POST['ph_no'];
$sql="INSERT INTO mytable(first_name,last_name,reg_no,ph_no)VALUES('$a', '$b', '$c','$d')";
if(mysqli_query($g,$sql))
{
	echo "data insert";
}
else{
	echo "data not insert";}
}


?>


<!DOCTYPE HTML>
<html>
<body>
<form  action="mohit.php" method="post"><br>
	first_name<input type="text" name="first_name" placeholder=""><br>
	last_name<input type="text" name="last_name" placeholder=""><br>
	reg_no<input type="text" name="reg_no" placeholder=""><br>
	ph_no<input type="text" name="ph_no" placeholder=""><br>
	<input type="submit" name="submit">
</form>
</body>
</html>