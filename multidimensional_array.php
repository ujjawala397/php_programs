<?php
$a=array(
			array('1','a','c'),
			array('2','d','b'));
for($i=0;$i<2;$i++)
{
	for($j=0;$j<3;$j++)
	{
		echo $a[$i][$j];
	}
	echo "<br>";
}
?>

<?php
$a=array(
			array('1'=>'aman','a'=>'naman','c'=>'raman'),
			array('2'=>'ram','d'=>'sham','b'=>'karan'));
for($i=0;$i<2;$i++)
{
	foreach($a[$i] as $key=>$value)
	{
		echo $key." name=".$value."<br>";
	}
}
?>





<?php
$a=array(
			'first'=>array('1'=>'aman','a'=>'naman','c'=>'raman'),
			'second'=>array('2'=>'ram','d'=>'sham','b'=>'karan'));
foreach($a as $key=>$value)
{
	foreach($a[$key] as $key1=>$value1)
	{
		echo "key = ".$key1." name=".$value1."<br>";
	}
}
?>