<html>
<title> Regacho, Rhennie Anne S. </title>
<body>
<?php

function errormsg($arr){
	for ($i = 0; $i < count($arr); $i++){
		if ($arr[$i] < 1 || $arr[$i] > 100){
			return 0;
		}	
	}
	return 1;
}

function psquare($arr){
	$arr2 = array();
	foreach($arr as $value){
		$x = (floor(sqrt($value)))-1;
		$y = $x * $x;
		array_push($arr2, $y);
	}

	$arr3 = array($arr, $arr2);
	for ($i = 0; $i < count($arr3[0]); $i++){
		print "You have entered ".$arr3[0][$i].". The next perfect square is ".$arr3[1][$i].".<br>";
	}
}

$arr = array($_POST["num1"], $_POST["num2"], $_POST["num3"], $_POST["num4"], $_POST["num5"]);
$checker = errormsg($arr);
if ($checker == 0){
	echo "Error. Number/s not within the range.";
} else {
	psquare($arr);
}

?>
</body>
</html>