<html>

	<head>
		<title>Greeting Message</title>
		<style type="text/css">

			div 
			{	font-size:20pt;
				color:green;
				font-family:Jokerman;
				text-align:center;width:30%
			}

			p
			{	font-size:18pt;
				color:darkblue;
				font-weight:bold;
				align:center;
				font-family:arial black
			}

			.double{border-style:double}

			.dashed{border-style:dashed}

		</style>

	</head>

	<body bgcolor="AliceBlue">
		<center><br><br>

		<div class="double">GREETING TEXT</div><br>

		<div class="dashed"><form method="POST" action="">

		<p>Enter The Text:<br><input  class ="box" name="text" type="text" ></p><br>

		<input type="submit" value= "&nbsp;&nbsp;Greet&nbsp;&nbsp;">

		<br></div></center></form>
		<br><br><br><br><br><br><br><br><br><br>		
		

	</body>

</html>
<?php
      if($_POST)
{
$text=$_POST['text'];
}
	echo '<center><font color="green" face="arial" size="6">WELCOME</font></center>'; 
	echo '<center><b>'. $text .'</b><font color="green">!!!</font></center>';
	echo '<p><img src="flower11.jpg" alt="flower" style="float:right;">'; 
	echo '<img src="flower11.jpg" alt="flower" style="float:left;"></p>';
?>