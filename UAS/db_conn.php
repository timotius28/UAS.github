<?php

$sname= "localhost";
$unmae= "root";
$password = "040502";

$db_name = "login";

$conn = mysqli_connect($sname, $unmae, $password, $db_name);

if (!$conn) {
	echo "Connection failed!";
}
