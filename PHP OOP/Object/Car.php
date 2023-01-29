<?php

	class Car{

		public $name;
		public $color;

		function sayHello(){
			echo "Hello from the Car Class" . "<br>";
		}
	}

	$car1 = new Car();
	$car1 -> name = "Audi";
	$car1 -> color = "Black";
	$car1 -> sayHello();
	echo "$car1->name is $car1->color Color";