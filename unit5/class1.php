<?php
class Rectangle
{
    // Declare  properties
    public $length = 10;
    public $width = 10;
    
    // Method to get the perimeter
    public function getPerimeter(){
        return (2 * ($this->length + $this->width));
    }
    
    // Method to get the area
    public function getArea(){
        return ($this->length * $this->width);
    } 
}
	$a=new Rectangle;
	echo "peri=".$a->getPerimeter();
	echo "Area".$a->getArea();
	?>
