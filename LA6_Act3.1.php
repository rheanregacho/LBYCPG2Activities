<html>
<title> Regacho, Rhennie Anne S. </title>
<body>
<?php

function pfactors($a)
{
	echo "Prime Factors: <br>";
	for($i = 2; $i <= $a; $i++){
		while ($a % $i == 0){
			$a /= $i;
			echo $i."<br>";
		}
	}
}

$num = $_POST["num"]; 

echo "The number is: ".$num."<br>";

if ($num < 2){
	echo "Error. It has no prime factors.";
} else{
	pfactors($num);
}

?>
</body>
</html>