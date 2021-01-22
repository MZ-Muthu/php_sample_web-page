<?php
include 'database.php';
$sql =mysqli_query($conn,"SELECT count('First_Name') from register");
$table = mysqli_fetch_array($sql);
echo "$table[0]";
?>