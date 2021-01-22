<?php
session_start();
include 'database.php';
$id = $_SESSION['ID'];
$sql = mysqli_query($conn,"SELECT * FROM register where ID=$id");
$row = mysqli_fetch_array($sql);

if(!isset($_SESSION['Email']))
{
    header('Location: login.php');
}
?>