<!doctype html public "-//w3c//dtd html 3.2//en">
<html>
<head>
<title>plus2net.com Newsletter subscription</title>
<META NAME="DESCRIPTION" CONTENT=" ">
<META NAME="KEYWORDS" CONTENT="">
<link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
<?Php
require "config.php";

//////////////////////////////////////////////
if($_GET['todo']=="resend"){
$email=$_GET['email'];
$mem_id=$_GET['email_id'];
/// Delete all previous confirmation data ////
if(!is_numeric($mem_id)){
echo "Data Error";
exit; }

$count=$dbo->prepare("delete from nl_confirm where email_id=:mem_id");
$count->bindParam(":mem_id",$mem_id,PDO::PARAM_INT);
$count->execute();
//// End //////////

require 'confirm-mail.php';  // Post confirmation mail to user address 
echo 'Thank You, Please check your Email ( including Spam folder ) to verify your address ';
}






echo "</body></html>";
