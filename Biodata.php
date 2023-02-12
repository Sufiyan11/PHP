<html>
<head><title>BioData</title></head>
<body bgcolor="AliceBlue">
    <form method="POST" action="">
	<table align="center" bgcolor="Lavender">
     <tr><td><center><h1>Biodata</h1><br><br></tr></td>
     <tr><td>Name:<input type="text" name="name"><br><br></tr></td>
     <tr><td>Age: <input type="text" name="age"><br><br></tr></td>
	<tr><td>Gender: <input type="text" name="gender"><br><br></tr></td>
	<tr><td>S/o: <input type="text" name="Father"><br><br></tr></td>
     <tr><td>Phone: <input type="text" name="phone"><br><br></tr></td>
     <tr><td>Email: <input type="text" name="email"><br><br></tr></td>
     <tr><td>Educational Qualification:<input type="text" name="qualification"><br></tr></td>
	<tr><td>Qualified From:<input type="text" name="qualified_from"><br></tr></td>
	<tr><td>Address: <textarea name="address"> </textarea><br><br></tr></td>
	<tr><td>Father Occupation: <input type="text" name="Fatocc"><br><br></tr></td>
	<tr><td>Siblings : <input type="text" name="Siblings"><br><br></tr></td>
	<tr><td>Hobbies : <input type="text" name="Hobbies"><br><br></tr></td></table>
    <center><input type="submit" value= "Display;">
    </form>

<?php
if ($_POST) {
	
    	echo '<center>';
    	echo "<h1>Biodata</h1><br><br>";
    	echo 'Name: ' . $_POST["name"] . "<br>";	
	echo "Age: " . $_POST["age"] . "<br>";
	echo "Gender: " . $_POST["gender"] . "<br>";
	echo "S/o: " . $_POST["Father"] . "<br>";
	echo "Mobile: " . $_POST["phone"] . "<br>";
	echo "Email: " . $_POST["email"] . "<br>";
	echo "Qualification: " . $_POST["qualification"] . "<br>";
	echo "Qualified From: " . $_POST["qualified_from"] . "<br>";
	echo "Address: " . $_POST["address"] . "<br>";
	echo "Father Occupation: " . $_POST["Fatocc"] . "<br>";
	echo "Siblings : " . $_POST["Siblings"] . "<br>";
	echo "Hobbies : " . $_POST["Hobbies"] . "<br>";

}
else{
echo "Enter the details fully";
}
?>
</body>
</html>