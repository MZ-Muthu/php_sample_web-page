<?php
 include 'authendication.php';
if(isset($_POST['submit']))
{
   
    extract($_POST);
    $user_mail = $_POST['emaile'];
    $sql = mysqli_query($conn,"SELECT * FROM register where Email='$emaile'");
    $row= mysqli_fetch_array($sql);
    $verify_email=$row['Email'];
    $verify_pass=$row['Password'];
    $verify_First_Name = $row['First_Name'];
    $verify_Last_name=$row['Last_Name'];
    if($user_mail ==  $verify_email)
    {
        $to = $verify_email;
        $subject = "Password";
        $txt = "$verify_email's email's password is: $verify_pass";
        $header = "From: password@studentstutorial.com" . "\r\n" .
        "CC: somebodyelse@example.com";
        mail($to,$subject,$txt,$header); 
    }
    else
    {
        echo "invalid email";
    }
}
?>
<!DOCTYPE HTML>
<html>
<head>
<style type="text/css">
 input{
 border:1px solid olive;
 border-radius:5px;
 }
 h1{
  color:darkgreen;
  font-size:22px;
  text-align:center;
 }

</style>
</head>
<body>
<h1>Forgot Password<h1>
<form action='' method='post'>
<table cellspacing='5' align='center'>
<tr><td>user mail id:</td><td><input type='email' name='emaile'/></td></tr>
<tr><td></td><td><input type='submit' name='submit' value='Submit'/></td></tr>
</table>
</form>
</body>
</html>