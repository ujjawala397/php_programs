
<html>
<body>

Welcome <?php echo $_GET["name"];?><br>
Your email address is: <?php echo $_GET["email"]; ?><br>
Your roll number is:<?php echo $_GET["roll"]; ?><br>
Your age is <?php echo $_GET["number"]; ?><br>
<?php $n3=$_GET["n1"];?><br>
<?php $n4=$_GET["n2"];?><br>

Before swapping <br>
<?php echo $n3."<br>";
echo $n4."<br>";
$c=$n3;
$n3=$n4;
$n4=$c;
?>
<span>After swapping <br></body>
<?php 
echo $n3."<br>";
echo $n4."<br>";
?>
</body>
</html>