<!doctype html public "-//w3c//dtd html 3.2//en">
<html>
<head>
<title>Admin area Newsletter subscription testing mail server</title>
<META NAME="DESCRIPTION" CONTENT=" ">
<META NAME="KEYWORDS" CONTENT="">
<link rel="stylesheet" href="../style.css" type="text/css">
</head>
<body>
<?Php
require "../config.php";
$email=$_POST['email'];

if(!(filter_var($email,FILTER_VALIDATE_EMAIL))){
echo "Your email address is not correct, please enter correct data";
exit; }


$headers4=$from_email;
$headers="";
$headers .="Reply-to: $from_email\n";
$headers .= "From: $from_email\n"; 
$headers .= "Errors-to: $from_email\n"; 
$headers .="Return-Path:$from_email\r\n";

$subject = "Hi This is a test mail !";
$body = "Hi,\n\nHow are you?  \n\n This is a test mail only. ";
//error_reporting(0);// With this no error reporting will be there

if (mail($to, $subject, $body, $headers)) {
echo("<p>Message successfully sent!</p>");
} else {
$status_msg .="<br>mail function is not working  ";
$status_installation='NOTOK';
}


?>
</body>

</html>
