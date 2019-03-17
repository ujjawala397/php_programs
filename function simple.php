<?php
echo "string";
$a=10;
$b=20;
echo "<br>";
echo ($a+$b);
global $y=221;
function my(){
	$x=5;
	echo $x;

	echo $y;
}
echo $y;

my();


?>