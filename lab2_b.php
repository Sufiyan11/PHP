<?php
$a=array(7,2,8,3,0);
echo "Given array before sorting : ";
for($i=0;$i<5;$i++)
{
echo $a[$i]."  ";
}
for($i=0;$i<5;$i++)
{
for($j=$i+1;$j<5;$j++)
{
if($a[$i]>$a[$j])
{
$c=$a[$i];
$a[$i]=$a[$j];
$a[$j]=$c;
}
}
}
echo "<br>Given array after sorting :";
for($i=0;$i<5;$i++)
{
echo $a[$i]."  ";
}
?>
