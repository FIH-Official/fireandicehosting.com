<?php
// Check for empty fields
if(empty($_POST['name'])          ||
   empty($_POST['email'])         ||
   empty($_POST['message'])    ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "<script>alert('No arguments provided! Please Provide Arguments and Submit Again.');</script>";
   echo "<script>document.location.href='./contact'</script>";
    return false;
   }

$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
// Create the email and send the message
$to = 'support@hunterswebdesigns.tk';// 'ceo-hunter@hunterswebdesigns.tk']; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "FIH Contact Form:  $name";
$headers = "From:no-reply@fireandicehosting.com";
$headers .= "MIME-Version: 1.0\r\n";
// $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$headers .= "Reply-To: $email_address";


if(mail($to,$email_subject,$email_body,$headers))
{
	echo "<script>alert('Success!:\nThe email was sent!');</script>";
    echo "<script>document.location.href='./contact'</script>";
}

return true;
    

?>