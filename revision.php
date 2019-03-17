<?php
echo "string";
$q=2;
$f=4;
echo "Value of a = $q"."<br>"." Value of b =".$f."";
echo "<br>";
var_dump($q." vimfvi".$f);
function f4()
{	
	 $a=10;
	 $b=11;
	echo "<br>edieddee $a";
	echo "<br>";
	echo $a+$b;
	echo "<br>";
	static $y = 0;
    echo $y;
    $y++;
}

f4();
f4();
f4();
f4();

for($i=0;$i<=5;$i++)
{
	echo $i."<br>";
}

$cars=array("maruti","suzuki","honda");
foreach($cars as $key)
{
	echo $key."<br>";
	
}
echo count($cars);//count counts the size of array

$car=array("ram"=>"audi","aman"=>"bmw","ubxu"=>"lambo");
foreach($car as $ky=>$value)
{
	echo "<br>key =".$ky."value=".$value;
}


function fact($t)
{
	$ans=1;
	for($i=1;$i<=$t;$i++)
	{
		$ans=$ans*$i;
	}
	echo $ans;
}
fact(5);





$car=array  (
				array("bmw","audi","honda"),
				array("mmt","redbus","volvo"),
				array("ram","aman","heman"),
				array("123","32","621")
						
		  	);


echo "<br><br>Multidimensional array value =".$car[0][0];

$ujjawal = ['harsh','ujjawal'];


echo '<pre>',var_dump($ujjawal),'</pre>';
print_r($ujjawal);

echo $ujjawal[0];


?>