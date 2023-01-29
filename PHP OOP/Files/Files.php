<?php

	/*
		1)Create a Files Class
		2)Create Methods
			-displayContent with filename as input  parameter
			-getContent with filename as input parameter
		3)Pass the Test.txt and displayContent and getContent
	*/

	class Files{

		function displayContent($filename){

			if (!file_exists($filename)) {
				echo "$filename doesn't exist!"."<br>";
				return;
			}
		echo file_get_contents($filename)."<br>";

		}

		function getContent($filename):string{

			if (!file_exists($filename)) {
				echo "$filename doesn't exist!"."<br>";
				return "";
			}

		$content = file_get_contents($filename);
		return $content;
		}
	}

	$file1 = new Files();
	$file1->displayContent("Test.txt");
	echo "Here is your file content: ".$file1->getContent("Test.txt");