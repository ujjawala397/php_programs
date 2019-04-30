<?php
$con=mysqli_connect('localhost','root','');
if(mysqli_select_db($con,'def'));
$sql="SELECT COUNT(name) FROM ghi WHERE name='ujwal'";

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
		echo $a["COUNT(name)"]."<br>";
	}
	?>
</body>
</html>
