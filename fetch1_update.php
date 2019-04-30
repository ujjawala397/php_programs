<?php
$con=mysqli_connect('localhost','root','');
mysqli_select_db($con,'form');
$sql="UPDATE store SET Name='Doe' WHERE Email='Rahul@gmail.com'";
$records=mysqli_query($con,$sql);
?>
