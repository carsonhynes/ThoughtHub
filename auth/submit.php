<?php

	$mysqli = new mysqli("localhost", "root", "bacon", "thoughthub");
	$q = "";
	$q .= "(NULL,'";
	$q .= $_POST["first_name"];
	$q .= "','";
	$q .= $_POST["password"];
	$q .= "','";
	$q .= $_POST["email"];
	$q .= "')";

//	echo $q;

	$mysqli->query("INSERT INTO  users (uID , name, password, email) VALUES $q");

	header( 'Location: /Thoughthub/' );

?>