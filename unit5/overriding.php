<?php
// The parent class has hello method that returns "beep".
class Car {
  public function hello()
  {
    echo "beep";
  }
}
 
//The child class has hello method that returns "Halllo"
class SportsCar extends Car {
  public function hello()
  {
    echo "Hallo";
	parent::hello(); 
  }
}
    
//Create a new object
$sportsCar1=new SportsCar();
  
//Get the result of the hello method
echo $sportsCar1 -> hello();
?>