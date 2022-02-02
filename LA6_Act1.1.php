<html>
<title> Regacho, Rhennie Anne S. </title>
<body>
<?php

function sum($a, $b)
{
	$sum = 0;
    for ($i = $a+1; $i < $b; $i++){
		if($i%2==0){
			$sum += $i;
		}
	}
	echo "The sum of all even integers in (".$a.",".$b.") is ".$sum.".";
}

$num1 = $_POST["num1"]; 
$num2 = $_POST["num2"]; 

echo "First Number: ".$num1."<br>";
echo "Second Number: ".$num2."<br><br>";

if ($num1 > $num2){
	$num3 = $num2;
	$num2 = $num1;
	$num1 = $num3;
}

sum($num1, $num2);

?>
</body>
</html>