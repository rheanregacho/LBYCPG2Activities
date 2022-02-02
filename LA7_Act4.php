<html>
<title> Regacho, Rhennie Anne S. </title>
<body>
<?php

$sqlConnect = mysqli_connect('localhost', 'root', '');
if(!$sqlConnect){
	die();
}
$selectDB = mysqli_select_db($sqlConnect, "Data1");
if(!$selectDB){
	die("Failed to connect to database.".mysqli_error());
}


if($_POST['age'] >= 18){
	$sql = "insert into VoterDetails(VoterID, LastName, FirstName, Town, Age)
	values('$_POST[voterID]', '$_POST[lname]', '$_POST[fname]', '$_POST[town]', '$_POST[age]')";
	mysqli_query($sqlConnect, $sql);
} else if ($_POST['age'] < 18){
	echo "Not allowed to register.<br><br>";
}


$result_out = mysqli_query($sqlConnect, "select * from VoterDetails order by LastName");
if(!$result_out){
	die();
} 

echo "<table border='1'>
	<tr>
	<th>VoterID</th>
	<th>Last Name</th>
	<th>First Name</th>
	<th>Town</th>
	<th>Age</th>
	</tr>";

while($VoterDtls = mysqli_fetch_array($result_out)){
	$VoterID = $VoterDtls['VoterID'];
	$LastName = $VoterDtls['LastName'];
	$FirstName = $VoterDtls['FirstName'];
	$Town = $VoterDtls['Town'];
	$Age = $VoterDtls['Age'];
	
	echo "<tr>";
	echo "<td>" . $VoterDtls['VoterID'] . "</td>";
	echo "<td>" . $VoterDtls['LastName'] . "</td>";
	echo "<td>" . $VoterDtls['FirstName'] . "</td>";
	echo "<td>" . $VoterDtls['Town'] . "</td>";
	echo "<td>" . $VoterDtls['Age'] . "</td>";
	echo "</tr>";
}

echo "</table>";


mysqli_close($sqlConnect);
?>
</body>
</html>