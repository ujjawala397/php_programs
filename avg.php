

<?php
$con=mysqli_connect('localhost','root','');
if(mysqli_select_db($con,'def'));
$sql="SELECT AVG(section) FROM ghi;";

$records=mysqli_query($con,$sql);
?>

<html>
<head>
	<title>Form</title>
</head>
<body>
	<?php
	while($a=mysqli_fetch_assoc($records))
	{
		echo $a["AVG(section)"]."<br>";
	}
	?>
</body>
</html>
