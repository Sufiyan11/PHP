<html>

<head>
<title>Age Calculator</title>
</head>

<body bgcolor="CornSilk">

<form action="" method="post">

<br>

<center><h1><u><font color="red">AGE CALCULATOR</font></u></h1></center>

<br>

<table bgcolor="grey" align="center">

<tr><td><br><input type="text" value="Enter Date-of-birth:" readonly>

<input type="number" name="date" placeholder="Date">
<input type="number" name="mon" placeholder="Month">
<input type="number" name="year" placeholder="Year"></tr></td>

<tr><td><br><br><center><br><br>

<input type="submit" value="&nbsp;&nbsp; SUBMIT &nbsp;&nbsp;">

<br><br><br></center></tr></td></table>

</form>

<?php if($_POST)
{

$y1=$_POST['year'];

$m1=$_POST['mon'];

$d1=$_POST['date'];

echo '<table align="center" border="2" width="50%"><tr align="center"><td><br>';
 
echo '<font color="Peru">';

echo'<font size=12>'; 

$y2=date("Y");

$m2=date("m");

$d2=date("d");

$age=$y2-$y1;

if($m1<$m2){
	$m=$m2-$m1;}
else{
	$m=$m1-$m2;}	

if($d1<$d2){
	$d=$d2-$d1;}
else{
	$d=$d1-$d2;}


if($d>30){
	$m+=1;}

if($m>12){
	$age+=1;}

echo '<center>Age : '.$age.'</center>';
}

echo'</font>'; 
echo'</td></tr></table>';
?>

</body>

</html>
