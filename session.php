<?php

include('database.php');
session_start();
$check = $_SESSION['Email'];
$ses_sql = mysqli_query($conn,"select Email from register where Email = '$email'");
$row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
$login_session = $row['Email'];
   
if(!isset($_SESSION['Email'])){
   header("location:login.php");
   die();
}
?>