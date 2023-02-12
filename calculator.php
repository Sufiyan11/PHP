<html>

<head>
<title>Calculator</title>
</head>

<body bgcolor="CornSilk">

<form action="" method="post">

<br>

<center><h1><u><font color="red">CALCULATOR</font></u></h1></center>

<br>

<table bgcolor="grey" align="center">

<tr><td><br><input type="text" value="Enter 1st number" readonly>

<input type="number" name="num1"></tr></td>

<tr><td><br><input type="text" value="Enter 2nd number" readonly>

<input type="number" name="num2"></tr></td>

<tr><td><br><input type="text" value="Select the opeartor">
<select name="Operator" id="operator">
<option value="+">Add</option>
<option value="-">Sub</option>
<option value="*">Multiply</option>
<option value="/">Divide</option>
<option value="%">Modulus</option>
<option value="**">Exponent</option>
</select>
<tr><td><br><br><center><br><br>

<input type="submit" value="&nbsp;&nbsp; SUBMIT &nbsp;&nbsp;">

<br><br><br></center></tr></td></table>

</form>

<?php if($_POST)
{

$n1=$_POST['num1'];

$n2=$_POST['num2'];

$op=$_POST['Operator'];

echo '<table align="center" border="2" width="50%"><tr align="center"><td><br>';
 
echo '<font color="black">'; 

$ans=0;

switch($op)
{
case "+":
	$ans=$n1+$n2;
	break;
case "-":
	$ans=$n1-$n2;
	break;
case "*":
	$ans=$n1*$n2;
	break;
case "/":
	$ans=$n1/$n2;
	break;
case "%":
	$ans=$n1%$n2;
	break;
case "**":
	$ans=$n1**$n2;
	break;
}
echo '<center>'.$ans.'</center>';

}

echo'</font>'; 
echo'</td></tr></table>';
?>

</body>

</html>
