<?php

	$mysqli = new mysqli("localhost", "root", "bacon", "thoughthub");
	$q = "";
	$q .= "('";
	$q .= $_POST["title"];
	$q .= "','";
	$q .= $_POST["description"];
	$q .= "','";
	$q .= $_POST["uid"];
	$q .= "')";

//	echo $q;

	$mysqli->query("INSERT INTO submissions (title , description, uid) VALUES $q");

	header( 'Location: /Thoughthub/' );

?>