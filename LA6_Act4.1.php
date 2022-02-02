<html>
<title> Regacho, Rhennie Anne S. </title>
<body>
<?php

function cmmndvsr($a, $b)
{
	if ($a < $b){
		$d = $a;
		while ($a % $d != 0 || $b % $d != 0){
			$d -= 1;
		}
	} else{
		$d = $b;
		while ($a % $d != 0 || $b % $d != 0){
			$d -= 1;
		}
	}
	if ($d == 1){
		echo "No common divisor.";
	} else {
		echo "The greatest common divisor is ".$d.".";
	}
}

$num1 = $_POST["num1"]; 
$num2 = $_POST["num2"]; 

echo "The first number is ".$num1.".<br>";
echo "The second number is ".$num2.".<br><br>";

if ($num1 < 0 && $num2 < 0 ){
	echo "The two numbers are negative. Cannot find a common divisor.";
} elseif ($num1 < 0){
	echo "The first number is negative. Cannot find a common divisor.";
} elseif ($num2 < 0){
	echo "The second number is negative. Cannot find a common divisor.";
} else {
	cmmndvsr($num1, $num2);
}

?>
</body>
</html>