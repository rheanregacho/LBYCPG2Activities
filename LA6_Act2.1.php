<html>
<title> Regacho, Rhennie Anne S. </title>
<body>
<?php

function median($a, $b, $c)
{
	if ($a>$b && $a>=$c){
		$temp = $a;
		$a = $c;
		$c = $temp;
	}
	if ($b>=$a && $b>=$c){
		$temp = $b;
		$b = $c;
		$c = $temp;
	}
	if ($b<$a){
		$temp = $b;
		$b = $a;
		$a = $temp;
	}
	return $b;
}

$num1 = $_POST["num1"]; 
$num2 = $_POST["num2"]; 
$num3 = $_POST["num3"]; 

echo "First Number: ".$num1."<br>";
echo "Second Number: ".$num2."<br>";
echo "Third Number: ".$num3."<br><br>";

$mdn = median($num1, $num2, $num3);
echo "The median is ".$mdn.".";

?>
</body>
</html>