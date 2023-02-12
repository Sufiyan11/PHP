<html>
	<body bgcolor="azure">
		<?php 
			$username=$_POST['username'];
			$password=$_POST['password'];
			 
			if($username=="sufiyan811" && $password=="sufiy@n143$")
			{
				echo'<table align="center" border="2">
					 <tr><td><center><h1><br>** PERSONAL DETAILS **<br><br></h1></center>
					 <font color="black" face="Courier">
					 <h3><b><pre>
	NAME 		: 	Sk.sufiyan	<br>
	D.O.B		: 	11 March 2003	<br>
	BLOOD GROUP	: 	O+	<br>
	ADDRESS		: 	Guntur, Andhra Pradesh	<br>
	CONTACT NO	: 	8919795819	<br>
	EMAIL ID	: 	tsufiyanshaik811@gmail.com	<br><br></pre>
					 </h3></b></font></td></tr></table>';
			}

			else
			{
				echo'<font face="calibri" size="20" color="black">
					 <center>Invalid<br>USERNAME or PASSWORD!</center></font>';
			}
		?>
	</body>
</html>