<?php
$file_name = 'textfile 2.txt';
$myfile = fopen($file_name, 'w') or die('Cannot open file: '.$file_name); 
$movie_name = "Die Another Day\n";
fwrite($myfile, $movie_name);
$movie_name = "No Time To Die\n";
fwrite($myfile, $movie_name);
fclose($myfile);
?>