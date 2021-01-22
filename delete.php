<?php
include 'authendication.php';
$sql = mysqli_query($conn,"DELETE FROM register where ID='$id'") or die('could not perform this action' );
header('Location: login.php');
?>
