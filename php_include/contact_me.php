<?php
// Check for empty fields
if(empty($_POST['name'])||
   empty($_POST['email'])||
   empty($_POST['message'])||
   empty($_POST['discordid'])||
   empty($_POST['phonenumb'])||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   !filter_var($_POST['phonenumb'], FILTER_VALIDATE_PHONE)
   {
   echo "<script>alert('No arguments provided! Please Provide Arguments and Submit Again.');</script>";
   echo "<script>document.location.href='./contact'</script>";
    return false;
   }

$name = $_POST['name'];
$email_address = $_POST['email'];
$message = $_POST['message'];
$phone = $_POST['phonenumb'];
//====================================
// the discord id is for the embed webhook 
// along with the support role id
//====================================
$discord = $_POST['discordid'];
$supportid = "557741837742243852";
// ====================================
// Website images for the embeded message 
// =====================================
$img_url = "https://fireandicehostingtesting.ml/assets/images/logo.png";
$icon_url = "https://fireandicehostingtesting.ml/assets/images/icon.png";
$webhook_url = "https://ptb.discordapp.com/api/webhooks/703278438991003718/feqaJoCmYChbTJzD_OldyHw4TTpbJpM_LMHaOQ51BLpHCHX1FeG3aJucby6uKKj1Ne5y";
$website_url = "https://fireandicehosting.com"
// Create the  and send the message
$to = 'support@hunterswebdesigns.tk';// 'ceo-hunter@hunterswebdesigns.tk']; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "FIH Contact Form:  $name";
$headers = "From:no-reply@fireandicehosting.com";
$headers .= "MIME-Version: 1.0\r\n";
// $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
$headers .= "Reply-To: $email_address";
// reCaptcha security
//reCAPTCHA validation
// $SECRET_KEY = "6LerxO0UAAAAALGZDsbzPjFUYoBIT_SB8XU5WXZr";
// if (isset($_POST['g-recaptcha-response'])) {
		
//     require('component/recaptcha/src/autoload.php');		
    
//     $recaptcha = new \ReCaptcha\ReCaptcha(SECRET_KEY);

//     $resp = $recaptcha->verify($_POST['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);

//       if (!$resp->isSuccess()) {
//             $output = json_encode(array('type'=>'error', 'text' => '<b>Captcha</b> Validation Required!'));
//             die($output);				
//       }	
// }
//================================================================================//
// This here is the discord webhook code                                          //
//================================================================================//
$timestamp = date('c', strtotime("now"));

$json_data = json_encode([
    //Message
    "content" => "**ATTENTION** <@&$supportid> | There is a new contact form, details are listed below.",
    //Username
    "username" => "$name",
    // avatar url.
    // uncomment to replace image set in webhook
    // "avatar_url" => "$icon_url",
    // Text-To-Speach
    "tts" => false,
    //File Upload
    // "file" => "",
    // Embeds Array
    "embeds" => [
        [
            //Embed Title
            "title" => "New Contact From By: $name",
            //Embed Type
            "type" => "rich",
            // Embed Description
            "description" => "$name with the discord account of <@$discord> has created a new support form",
            // URL of title link 
            "url" => "$websiteurl",
            // Timestamp of embed must be formatted as ISO8601 
            "timestamp"=>"$timestamp",
            // Footer 
            "footer" => [
                "text" => "Fire & Ice Hosting™",
                "icon_url" => "$icon_url"
            ],
            // Image to send
            "image" => [
                "url" => "$img_url"
            ],
            // Thumbnail
            "thumbnail" => [
                "url"=>"$icon_url"
            ],
            // Author
            "author" => [
                "name" => "$name",
                "url" => "$website_url"
            ],
            // Additional Fields Array 
            "fields" => [
                // field one
                [
                    "name" => "Contactor:",
                    "value" => "$name",
                    "inline"=> false
                ],
                [
                    "name" => "Discord Account:",
                    "value" => "<@$discord>",
                    "inline"=> true
                ],
                [
                    "name" => "Users Email:",
                    "value" => "**[$email](<https://mailto:$email>)**",
                    "inline"=> true
                ],
                [
                    "name" => "Phone #",
                    "value" => "**[$phone](<https://tel:$phone>)",
                    "inline"=> true
                ],
                [
                    "name" => "Message Content:",
                    "value" => "**```$message```**",
                    "inline"=> false
                ]
                // Etc... 
            ]
            
        ]
    ]
], JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    
$ch = curl_init($webhookurl);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-type: application/json'));
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $json_data);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_HEADER, 0);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

$response = curl_exec($ch);
// if you need to debug, or find out why you can't send message uncomment line below, and execute script,
// echo $response

curl_close($ch);
//================================================================================//
// This is the end of discord webhook code                                        //
//================================================================================//
if(mail($to,$email_subject,$email_body,$headers))
{
	echo "<script>alert('Success!:\nThe email was sent!');</script>";
    echo "<script>document.location.href='./contact'</script>";
}

return true;
    

?>