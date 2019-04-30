<?php
Class demo
{ 
Public $first;
Public $second;
function __construct($a,$b)
{
$this->first=$a;
$this->second=$b;
}
function add()
{
 
$add=$this->first+$this->second;
 
echo "sum of given no=".$add;
 
}
 
}
 
$obj= new demo($_POST['x'],$_POST['y']);
 
$obj->add();
 
?>
 
<form method="post">
 
enter your first number<input type="text" name="x"/><br/>
 
enter your second number<input type="text" name="y"/><br/>
 
<input type="submit" value="+"/>
 
</form>