<?php
include 'authendication.php';
if(isset($_POST['save_update']))
{
 
    extract($_POST);
    include 'database.php';
    $file = rand(1,100000000) . "-" . $_FILES['file_update']['name'];
    $tmp = $_FILES['file_update']['tmp_name'];
    $loc = 'upload/';
    if(move_uploaded_file($tmp,$loc.$file))
    {
    $sql = mysqli_query($conn, "UPDATE register SET First_name='$first_name_update',Last_name='$last_name_update',File ='$file' WHERE ID='$id'") or die('could not perform the action');
    
    header('Location: home.php');
    }
    else
    {
        echo "some thing wrong to your connection";
    }
}
?>