<?php

	//Calculate the employee salary
	
	class Employee{

		public $id;
		public $name;
		public $workingHoursPerDay = 8;
		public $hourlyRate = 15;
		public $totalLeaveTaken;
		public $workingDays;

		function getSalaryAmount($totalDays):int{

			$this->workingDays = $totalDays - $this->totalLeaveTaken;
			$salary = $this->workingDays * $this->workingHoursPerDay * $this->hourlyRate;
			return $salary;
		}
	}

	//Employee 1
	$employee1 = new Employee();
	$employee1->id = 100;
	$employee1->name = "Jovana";
	$employee1->totalLeaveTaken = 4;
	$salary = $employee1->getSalaryAmount(23);
	echo "$employee1->name has worked for $employee1->workingDays Days and taken $employee1->totalLeaveTaken leaves" . "<br>";
	echo "$employee1->name salary is $salary". "<br>";

	//Employee 2
	$employee2 = new Employee();
	$employee2->id = 102;
	$employee2->name = "Marija";
	$employee2->totalLeaveTaken = 5;
	$salary = $employee1->getSalaryAmount(22);
	echo "$employee2->name has worked for $employee2->workingDays Days and taken $employee2->totalLeaveTaken leaves" . "<br>";
	echo "$employee2->name salary is $salary";


