<html>
<title> Regacho, Rhennie Anne S. </title>
<head>
    <style>
        .error {color: #FF0000;}
    </style>
</head>
<body>
<?php

$usernameE = $passwordE = "";
$username = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["username"])) {
        $usernameE = "Username is required.";
    } else {
        $username = test_input($_POST["username"]);
    }

    if (empty($_POST["password"])) {
        $passwordE = "Password is required.";
    } else {
        $password = test_input($_POST["password"]);
    }
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

?>

<h2>Log-In</h2>
<p><span class="error">* required field</span></p>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
    Username: <input type="text" name="username">
    <span class="error">* <?php echo $usernameE;?></span>
    <br><br>
    Password: <input type="text" name="password">
    <span class="error">* <?php echo $passwordE;?></span>
    <br><br>
    <input type="submit" name="submit" value="Submit">
</form>
<form method="post" action="Register.php">
	Haven't registered yet? Sign up now!
	<br><br>
    <input type="submit" name="submit" value="Register">
</form>

<?php

$sqlConnect = mysqli_connect('localhost','root','');
if(!$sqlConnect) {
    die();
}

$selectDB = mysqli_select_db($sqlConnect,'DB1');
if(!$selectDB) {
    die("Database connection failed!" .mysqli_error());
}

$queryLI = "Select * from Records where userName = '". mysqli_real_escape_string($sqlConnect,$username) ."' AND Password = '". mysqli_real_escape_string($sqlConnect,$password) ."'";
$resultLI = mysqli_query($sqlConnect,$queryLI);
$queryUN = "Select * from Records where userName = '". mysqli_real_escape_string($sqlConnect, $username)."'";
$resultUN = mysqli_query($sqlConnect,$queryUN);
$queryPW = "Select * from Records where Password = '". mysqli_real_escape_string($sqlConnect, $password)."'";
$resultPW = mysqli_query($sqlConnect,$queryPW);
if (mysqli_num_rows($resultLI) == 1){
	header("Location: http://localhost/CPG2/WelcomePage.php");
} else if (mysqli_num_rows($resultUN) < 1){
	if (mysqli_num_rows($resultPW) == 1){ 
		echo "Your username is incorrect!";
	}
} else if (mysqli_num_rows($resultPW) < 1){
	if (mysqli_num_rows($resultUN) == 1){ 
		echo "Your password is incorrect!";
	}
}

mysqli_close($sqlConnect);

?>
</body>
</html>