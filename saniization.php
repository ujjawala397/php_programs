<?php
print_r(filter_list());
if(isset($_POST['submit']));



$a=	$_POST['name'];
if(empty($a))
{
	echo "Name Not found";
}
else
{
	$a=filter_var($a,FILTER_SANITIZE_STRING);
	echo "<br>";
	echo $a."==is Sanitized.<br>";
	if(!preg_match("/^[a-zA-Z]+$/",$a))
	{
		echo "Name Invalid<br>";
	}
	else
	{
		echo "Valid Named<br>";
	}

}
$b=$_POST['Roll'];

$c=$_POST['Age'];
$d=$_POST['Address'];
echo "Name is {$a},Roll  is {$b},Age is {$c},Address is {$d}";

?>

<form action="saniization.php" method="POST">
	<input type="text" name="name" placeholder="Name" required="name">
	<input type="text" name="Roll" placeholder="roll">
	<input type="text" name="Age" placeholder="age">
	<input type="text" name="Address" placeholder="add">
	<input type="Submit">
</form>

