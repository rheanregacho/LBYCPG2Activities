<html>
<title> Regacho, Rhennie Anne S. </title>
<body>
<?php

$grd1 = $_POST["grd1"]; 
$grd2 = $_POST["grd2"]; 
$grd3 = $_POST["grd3"]; 
$grd4 = $_POST["grd4"]; 
$grd5 = $_POST["grd5"]; 

echo "First Grade: ".$grd1."<br>";
echo "Second Grade: ".$grd2."<br>";
echo "Third Grade: ".$grd3."<br>";
echo "Fourth Grade: ".$grd4."<br>";
echo "Fifth Grade: ".$grd5."<br><br>";
	
if ($grd1<70 || $grd2<70 || $grd3<70 || $grd4<70 || $grd5<70){
	$cntr = 0;
	if ($grd1 < 70){$cntr += 1;} 
	if ($grd2 < 70){$cntr += 1;}
	if ($grd3 < 70){$cntr += 1;}
	if ($grd4 < 70){$cntr += 1;}
	if ($grd5 < 70){$cntr += 1;}
	echo "You have ".$cntr." failing grade/s.";
} else {
	$avg = ($grd1+$grd2+$grd3+$grd4+$grd5)/5;
	echo "The average is ".$avg.".";
}

?>
</body>
</html>