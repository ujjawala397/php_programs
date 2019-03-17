<?php
$a=10;
var_dump($a);
$arr=array('bisso','hate','very','very','very','much');
$arr1=array('ujju','love','very','very','very','much,');
$arr2=array('juju','love','very','very','very','much,');

echo "<br>";
for($i=0;$i<6;$i++)
{
	echo "  ".$arr[$i];
}
echo "<br>";
foreach($arr1 as $key)
{
	echo "  ".$key;
}
echo "<br>";
foreach($arr2 as $key=>$value)
{
	echo $key.$value." ";
}

$arr3=array("name"=>"bisso",
				"age"=>"20");
echo "<br>";
foreach($arr3 as $key=>$value)
{
	echo " ".$key. " " .$value; 
}

$arr4=array
		(array("Volvo",100,96),
	   	array("bmw",103,43));
for($i=0;$i<2;$i++)
{
	for($j=0;$j<3;$j++)
	{
		echo $arr4[$i][$j];
	}
}

$arr5=array
		("name"=>array("bisso"=>"age is 20"),
		 "section"=>array("1"=>"strength is 50"));
x
		foreach($arr5 as $key=>$value)
		{
			echo $key;
			foreach($arr5[$key] as $key=>$value)
			{
				echo $key." ".$value;
			}
			
		}



?>