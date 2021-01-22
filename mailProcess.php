<?php
require_once 'mailer/class.phpmailer.php'; 

$mail = new PHPMailer(true);
extract($_POST);
if(isset($_POST['btn_send']))
{
    $email      = strip_tags($_POST['email']);
   $subject    = strip_tags($_POST['subject']);
   $text_message    = "Hello";      
   $message  = strip_tags($_POST['message']);

   try
   {
    $mail->IsSMTP(); 
    $mail->isHTML(true);
    $mail->SMTPDebug  = 0;                     
    $mail->SMTPAuth   = true;                  
    $mail->SMTPSecure = "ssl";                 
    $mail->Host       = "smtp.gmail.com";      
    $mail->Port        = '465';             
    $mail->AddAddress($email);
    $mail->Username   ="kumaranaaa5@gmail.com";  
    $mail->Password   ="Cmvvmccv187.";            
    $mail->SetFrom('kumaranaaa5@gmail.com','Divyasundar Sahu');
    $mail->AddReplyTo("kumaranaaa5@gmail.com","Divyasundar Sahu");
    $mail->Subject    = $subject;
    $mail->Body    = $message;
    $mail->AltBody    = $message;
    if($mail->Send())
    {
     
     $msg = "Hi, Your mail successfully sent to".$email." ";
     
    }
   }
   catch(phpmailerException $ex)
   {
    $msg = "<div class='alert alert-warning'>".$ex->errorMessage()."</div>";
   }
  } 
?>