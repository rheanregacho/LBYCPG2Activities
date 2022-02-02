<html>
<title> Regacho, Rhennie Anne S. </title>
<body>
<?php

function sum($arr, $cnt)
{
	return array_sum($arr);
}


function avg($x, $cnt)
{
	$avrg = $x / $cnt;
	return $avrg;
}

$arrcount = 0;
$arr = array($_POST["num1"], $_POST["num2"], $_POST["num3"], $_POST["num4"], $_POST["num5"]);
sort($arr);
$arrcount = count($arr);

echo "The numbers are: <br>";
for ($i = 0; $i < $arrcount; $i++)
{
    echo $arr[$i]."<br>";
}

$sum = sum($arr, $arrcount);
$ave = avg($sum, $arrcount);

echo "The sum of the five numbers is ".$sum.".<br>";
echo "The average of the five numbers is ".$ave.".<br>";
echo "The lowest value in the array is ".$arr[0].".";

?>
</body>
</html>