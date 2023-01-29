<?php

	class Files{

		function displayContent($filename): bool{

			$result = true;

		try{

			echo "Read the contnent of the file: $filename" . "<br>";
			$content = file_get_contents($filename);
			echo "Displaying content of the file: $filename". "<br>";
			echo $content;
		}catch(Exception $e){
			$result = false;
		}
		return $result;
		}
	}

	$file1 = new Files();
	$file1 ->displayContent("Test.txt");
