<?php
$uname=$_POST['uname'];
$pwrd=$_POST['password'];
include "./sconnect.php";
$sql = "select rno,sname,pwd,cgpa from student where rno='$uname'";
$res = mysqli_query($db,$sql);
 // $res = mysql_query($sql);
	if(!$res){
			echo "Invalid Credential By the Student Roll no ".$uname;
		echo "<a href=./slogin.htm>Goto home</a>";
	}
	if(mysqli_num_rows($res) == 0){
		echo "Invalid Credential By the Student Roll no ".$uname;
		echo "<a href=./slogin.htm>Goto home</a>";
	}
	
	
	while($row = mysqli_fetch_row($res))
		{
		$_POST['rno'] = $row[0];
		$_POST['sname'] = $row[1];
		$_POST['pwd'] = $row[2];
        $_POST['cgpa'] = $row[3];
 		if($uname == $row[0] && $pwrd == $row[2])
			{
				
				echo "Successfully Login By the Student";
				echo "Roll No     : =".$row[0];
				echo "<br>Student Name: =".$row[1];
				echo "<br>Roll No     : =".$row[0];
				echo "<br>CGPA        : =".$row[3];
		    }
		else{ 
			  echo "Invalid Credential By the Student Roll no ".$uname;
			echo "<a href=./slogin.htm>Goto home</a>";
			}
         }


?>