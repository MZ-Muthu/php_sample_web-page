<?php

$server = 'localhost';
$user = 'root';
$passw = '';
$db = 'sample';

$conn = mysqli_connect($server, $user, $passw, $db);

if($conn === false)
{
    die("Error: could not connect database" . mysqli_connect_error());
}

?>