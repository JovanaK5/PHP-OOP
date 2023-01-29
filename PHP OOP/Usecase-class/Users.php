<?php

	class User{

		function fetchUser($id){

			$result = false;

			echo "Query the Database: $id";
			$result = true;
			echo "Display the records";

			return $result;
		}

		function deleteUser($id){

			echo "Deleting the records from the User Id: $id";
		}
	}

	$user1 = new User();
	$user1->fetchUser(66);
	$user1->fetchUser(33);
	$user1->deleteUser(66);
