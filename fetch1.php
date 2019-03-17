<?php
$con=mysqli_connect('localhost','root','');
if(mysqli_select_db($con,'form'));
$sql="SELECT * FROM store";
$records=mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title>Fetching</title>
</head>
<body>
	<table style="border: solid; padding: 15px; text-align: center;margin-left:450px;margin-top: 100px;">
		<tr>
			<th>NAME</th>
			<th>E-Mail</th>
		</tr>
			<?php
				while($a=mysqli_fetch_assoc($records)) 
				{
					echo "<tr>";
					echo "<td>".$a['Name']."</td>";
					echo "<td>".$a['Email']."</td>";
					echo "</tr>";
				}



			?>
	</table>
</body>
</html>