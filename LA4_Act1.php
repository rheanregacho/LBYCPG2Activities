<html>
<head><title>Regacho, Rhennie Anne S.</title></head>
<body>
<?php

$a = 3;
$b = 4;
$c = 5;

echo "Area of a Triangle given the Three Sides <br><br>";
echo "a = 3 <br>";
echo "b = 4 <br>";
echo "c = 5 <br><br>";

$s = ($a+$b+$c)/2;
$area = sqrt($s*($s-$a)*($s-$b)*($s-$c));

echo "The semi-perimeter of the triangle is ".$s." units and its area is ".$area." units.";

?>
</body>
</html>