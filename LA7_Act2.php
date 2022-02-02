<html>
<title> Regacho, Rhennie Anne S. </title>
<body>
<?php

function div($arr, $cnt)
{
	$counter = 0;
	for ($i = 0; $i < $cnt; $i++){
		if(($arr[$i] % 3 == 0) && ($arr[$i] % 5 == 0)){
			$counter += 1;
		}
	}
	return $counter;
}

function message($dvsbl)
{
	if ($dvsbl == 0){
		echo "No number is divisible by both 3 and 5.";
	} else if ($dvsbl == 1){
		echo "There is a number divisible by both 3 and 5.";
	} else if ($dvsbl ==2){
		echo "There are 2 numbers divisible by both 3 and 5.";
	} else {
		echo "All numbers are divisible by both 3 and 5.";
	}
}

$arr = array($_POST["num1"], $_POST["num2"], $_POST["num3"]);
sort($arr);
$arrcount = count($arr);

echo "The numbers are: <br>";
for ($i = 0; $i < $arrcount; $i++)
{
    echo $arr[$i]."<br>";
}

$dvsbl = div($arr, $arrcount);
message($dvsbl);

?>
</body>
</html>