<?php
//isset function checks whethr the submit button is pressed or not
if(isset($_POST['submit'])){
	extract($_POST);
	if(empty($name))
	{
		echo "Name not found";
	}
	else
	{
		echo $name."<br>";
	}
	
	if(empty($email))
		{echo "email not found";}
	else
		{
			echo $email."<br>";
		}
		
	if(empty($number))
	
		{
			echo "Number not found";
		}
	else
		{
			echo $number."<br>";
		}
}
?>