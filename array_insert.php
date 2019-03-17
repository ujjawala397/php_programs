<?php
#Insert a new item in array at any position

//Indexed Array

//Approach1
$cars = array("Volvo", "BMW", "Toyota");

/*
Approach 2
$cars[0] = "Volvo";
$cars[1] = "BMW";
$cars[2] = "Toyota";
*/
$cars[1]="wolkswagen";
for($i=0;$i<3;$i++)
{
	echo $cars[$i]."<br>";
}

//Multidimensional
$b=array(
		array("abc",20,1188,"dgvsdgev"),
		array("xyz",21,203882),
		array("lmn",22,38377),
		array("kio",23,2339));
for($i=0;$i<= 3;$i++)
{
	echo "<br>"."<ul>";
	for($j=0;$j<3;$j++)
	{
		echo "<li>".$b[$i][$j]."</li>"."<br>";
	}
	echo "</ul>";
}
echo $b[0][3];YH

echo $b[0][0]."<br>";
echo $b[1][0]."<br>";
echo $b[2][0]."<br>";
echo $b[3][0];

$score=array("mohammad"=>array("maths"=>38,"physics"=>39,"biology"=>48),
			 "aman"=>array("maths"=>40,"physics"=>45,"biology"=>46));
//Accessing multi dimensional array

echo $score['mohammad']['physics']."<br>";
echo $score['aman']['maths']."<br>";


?>