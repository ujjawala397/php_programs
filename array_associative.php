<?php

$age=array("ram"=>"15","sham"=>"17");
foreach($age as $key=>$value)
{
	echo "Age of ".$key."=".$value."<br>";
}
echo $age['ram']."<br>"."<br>";


//multidimensional associative array always traversed with foreach

$arr=array(
	"first"=>array("ram"=>"15","sham"=>"17"),
	"second"=>array("xcgm"=>"11","yrdam"=>"15"));
foreach($arr as $key=>$value)
{

	foreach($arr[$key] as $key1=>$value1)
	{
		echo $key1."=>".$value1."<br>";
	}
}
echo $age['ram'];
?>