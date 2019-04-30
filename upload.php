<?php
if(isset($_POST['upload']))
{
    $file=$_FILES['file'];
    $file_name=$_FILES['file']['name'];
    $file_type=$_FILES['file']['type'];
    $file_size=$_FILES['file']['size'];
    $file_tem_loc=$_FILES['file']['tmp_name'];
    $file_store=$file_name;
    move_uploaded_file($file_tem_loc,$file_store);
}
?>

<html>
    <head>
        <title>Uploading file</title>
    </head>
<body>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
    <label>Uploading file</label>
    <p><input type="file" name="file"/></p>
    <p><input type="submit" name="upload" value="upload image"/></p>
    </form>
</body>
</html>