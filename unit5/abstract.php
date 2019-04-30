<?php
abstract class Car {
   // Abstract method
  abstract public function calcNumMilesOnFullTank();
}
class Honda extends Car {
  // Since we inherited abstract method, we need to define it in the child class, 
  // by adding code to the method's body.
  public function calcNumMilesOnFullTank()
  {
   echo "using abstract method in child class";
  }
}
$Honda1 = new Honda();
echo $Honda1 -> calcNumMilesOnFullTank();
?>