<?php

	/*
		1)Create a Bank Class
		2)Define Properties of Bank Class
			-accno
			-name
			-balance
		3)Define Methods
			-depositAmount($amt)
			-deductAmount($amt)
			-checkBalance()
		4)Create an Account for User
		5)CheckBalance,DepositAccount,DeductAmount
	*/

	class Bank{

		public $accno;
		public $name;
		public $balance = 0;

		function depositAmount($amt){

			$this->balance = $this->balance+$amt;
		}

		function deductAmount($amt){

			if ($this->balance <= 0) {
				echo "No Balance in this Account"."<br>";
				return;
			}

			if ($this->balance <= $amt) {
				echo "Requested Amount is greater than Balance"."<br>";
				return;
			}
			$this->balance = $this->balance+$amt;
		}

		function checkBalance(){

			echo "Account Balance : $this->balance";
		}
	}

	$bank1 = new Bank();
	$bank1->accno = 88;
	$bank1->name = "Jovana";
	$bank1->balance = 400;

	$bank1->checkBalance();
	$bank1->depositAmount(400);
	$bank1->deductAmount(150);


