
<?php 
require('interface1.php');
class MyClassName implements MyInterfaceName{ 
   public  function methodA() {  
  
     // method A implementation 
	 echo "method A implementation ";
   }  
  /* public  function methodB(){  
  
     // method B implementation 
	 echo "method B implementation ";
   } */ 
} 
$a=new MyClassName();
echo $a->methodA();
  ?> 
