<?php
	$myfile = fopen("textfile1.txt", "r") or die("Unable to open file!");
	$content = fread($myfile, filesize("textfile1.txt"));  
	echo $content;
	fclose($myfile);
?>