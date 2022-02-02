<html>
<title> Regacho, Rhennie Anne S. </title>
<body>
<?php

$a = $_POST["a"]; 
$b = $_POST["b"]; 
$c = $_POST["c"]; 

echo "A = ".$a."<br>";
echo "B = ".$b."<br>";
echo "C = ".$c."<br>";
 
if ($a+$b > $c && $a+$c > $b && $b+$c > $a){
	$s = ($a+$b+$c)/2;
	$area = sqrt($s*($s-$a)*($s-$b)*($s-$c));
	echo "The sides satisfies the Triangle Inequality Theorem. <br> The semi-perimeter is ".$s." units and the area is ".$area." sq. units.";
} else {
	echo "Not a triangle. No semi-perimeter and area to show.";
}

?>
</body>
</html>