<?php
//parent class
class Foo {
	public function hello() {
		printf("class Foo method hello...");
	}
}

//child class
class Po extends Foo{

	//overriding parent method
	public function hello() {
		printf("class child method hello...");

		//calling parent method
		parent::hello();
	}
}

//creating child class object
$po_obj = new Po();

$po_obj->hello();
?>