<?php
$name="MY name is Juju";
$i=1;
echo "My dosts<br>"."<br>"."Harsh"."<br>"."anil"."<br>".'   '."champo"."<br>".$name."<br>".$i."<br>";
echo gettype($i);
echo "<h2>".$i."<br>".$name."</h2>";
$arr=array("red","green","blue");
var_dump($name);
var_dump($i);
echo "<br>"."$arr[1]";
define("temp","hello everyone bhj hg");
echo "<br>".temp;
echo "<br>".str_word_count(temp);
echo str_replace("MY","bad",$name);
echo "<br>".str_replace("MY","bad",$name,$count);
echo "<br>".$count."<br>";
$q=5;
$r=2;
if($q==$r)
{
	echo "True";
}
else
{
	echo "False";
}
$a=array("abc",10,20,'1w');
var_dump($a);
for($i=0;$i<4;$i++)
{
	echo $a[$i]."<br>";
}
foreach($a as $ky)
{
	echo $ky."<br>";
}

$ad=array("men"=>"ram","age"=>"20");
foreach($ad as $key=>$val)
{
	echo " rfrfrgryhrthrt"."<br>".$key."<br>".$val."<br>";
}

$av=array("name"=>"abc","roll"=>"20");
foreach($av as $key=>$value)
{
	echo "key=".$key."value=".$value."<br>";
}
?>