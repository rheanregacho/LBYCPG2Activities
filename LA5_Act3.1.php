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
	
$disc = ($b*$b) - (4*$a*$c); 

if ($disc < 0){
	echo "No real root/s.";
} else if ($disc == 0){
	$root = (-$b)/(2*$a);
	echo "Number of real root/s: 1 <br>";
	echo "Real Root: ".$root;
} else {
	$root1 = (-$b - sqrt($disc))/(2*$a);
	$root2 = (-$b + sqrt($disc))/(2*$a);
	echo "Number of real root/s: 2 <br>";
	echo "Real Roots: ".$root1." , ".$root2;
}

?>
</body>
</html>