<html>
<head><title>Date_and_Time</title>
<style>
div{
font-family:Georgia;
font-size:20px;
color:Snow;
text-align:center;
}
table{
background-color:white;
border:2px double ;
text-align:center;
}
th{
font-size:20px;
color:red;
}
</style>
</head>
<body bgcolor="DarkCyan">
<div>
<?php
echo '<table align="center" border="2" width="50%">';
echo '<th>Format</th><th>Date</th><tr></tr>';
echo '<tr><td>dd/mm/yy</td><td>'. date("d/m/y").'<br></td></tr>';
echo "<tr><td>dd/mm/yyyy</td><td>".date("d/m/Y")."<br></td></tr>";
echo "<tr><td>dd MON yyyy</td><td>" .date("d M Y")."<br></td></tr>";
echo "<tr><td>Day, dd MON yyyy</td><td>".date("D, d M Y")."<br></td></tr>";
echo "<tr><td>Day, dd MONTH yyyy</td><td>".date("D, d F Y")."<br></td></tr>";
echo '<tr><td>dd/mm/yy  Time</td><td>'. date("d/m/y - h:i:sa").'<br></td></tr>';
$d=strtotime("tomorrow");
echo '<tr><td>Tomorrow date  dd/mm/yy  Time</td><td>'. date("d/m/y - h:i:sa",$d).'<br></td></tr>';
$d=mktime(6,25,05,3,11,2003);
echo '<tr><td> created date  dd/mm/yy  Time</td><td>'. date("d/m/y - h:i:sa",$d).'<br></td></tr>';
echo '<tr><td>Decrease 15 days From Current Date</td><td>'.date("d/m/Y",time()-(86400*15));
echo '<tr><td>dd/mm/yy  Time(in 24hr format)</td><td>'. date("d/m/y - H:i:s").'<br></td></tr>';

?>
</div>
</table>
</body>
</html>