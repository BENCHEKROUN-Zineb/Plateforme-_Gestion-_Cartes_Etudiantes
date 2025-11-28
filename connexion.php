<?php

header("Access-Control-Allow-Origin: *");

$password = strval($_POST['password']);
$login = $_POST['username'];

$mysqli = new mysqli("localhost","root","","images");

// Check connection
if ($mysqli -> connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
  exit();
}

$query = "SELECT count(username) FROM user WHERE username ='".$login."' AND pass= '".$password."';";

$result = $mysqli->query($query);

$row = $result->fetch_row();

if ($row[0]==1)
{
	header('Location: http://127.0.0.1/carteEtudiant/app/');

}
else
{
	header('Location: http://127.0.0.1/carteEtudiant');
}

   ?>
