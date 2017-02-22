<?php
	//echo (json_encode($_REQUEST));
	
	$authFlag = 0;

	$mysqli = new mysqli("localhost", "root", "bacon", "thoughthub");
	$q = "";
	$q .= "email='";
	$q .= $_POST["email"];
	$q .= "' AND ";
	$q .= "password='";
	$q .= $_POST["password"];
	$q .= "'";

//	echo $q;

	$result = $mysqli->query("SELECT uid FROM users WHERE $q");

if(mysqli_num_rows($result) == 0) {
     echo "NOT AUTHENTICATED";
     $authFlag = 0;
} 
else {
	echo "YOU GOT IN!!!";
    $authFlag = 1;
}

?>

