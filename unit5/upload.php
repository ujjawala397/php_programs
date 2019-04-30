<?php

	if(isset($_POST['submit']))
	{
		$file=$_FILES['file'];
		$file_name=$_FILES['file']['name'];
		$file_type=$_FILES['file']['type'];
		$file_size=$_FILES['file']['size'];
		$file_tem_loc=$_FILES['file']['tmp_name'];
		
    	move_uploaded_file($file_tem_loc,$file_name);
	}
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<form action="upload.php" method="post" enctype="multipart/form-data">
	<input type="file" name="file">
	<input type="submit" name="submit" value="upload">
</form>
</body>
</html>
