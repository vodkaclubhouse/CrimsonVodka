<!doctype html public "-//w3c//dtd html 3.2//en">
<html>
<head>
<title>Newsletter subscription</title>
<META NAME="DESCRIPTION" CONTENT=" ">
<META NAME="KEYWORDS" CONTENT="">
<link rel="stylesheet" href="style.css" type="text/css">
</head>

<body>
<?Php
require "config.php";
$confirm_id=$_GET['confirm_id'];

$count=$dbo->prepare("select confirm_id,email,email_id,word,status,UNIX_TIMESTAMP(dtt) as stored_time from nl_confirm where confirm_id=:confirm_id");
$count->bindParam(":confirm_id",$confirm_id,PDO::PARAM_INT,4);



if($count->execute()){
$row = $count->fetch(PDO::FETCH_OBJ);
if($row->confirm_id >0){
///////// checking the input data with record ////////////
$flag='OK';
$msg='';
if($row->email_id <> $_GET['email_id']){
$flag='NOTOK';
$msg.='<br>Wrong Email address ';
}

if($row->word  <> $_GET['token']){
$flag='NOTOK';
$msg.='<br>Wrong Token';
}

if($row->email <> $_GET['email']){
$flag='NOTOK';
$msg.='<br>Wrong Email address ';
}
$present_time=time();
$stored_time=$row->stored_time;
//echo 'stored time : '.$row->stored_time.'<br>Present time : '. $present_time.'<br>' ;
if(($present_time-$stored_time)>300){ 
//// Within 300 seconds user needs to confirm subscription , you can adjust this duration ////
$flag='NOTOK';
$msg.='<br>It is too long. Your confirmation time expired. <a href=subscribe.php>Subscribe again</a> ';
}

if($row->status == 'A'){
$flag='NOTOK';
$msg.='<br>You have already confirmed your subscription. ' ;
}

if($flag=='OK'){
$count1=$dbo->prepare("update nl_email set status='A' where email_id=$row->email_id");
if($count1->execute()){
$count2=$dbo->prepare("delete from  nl_confirm where confirm_id=$row->confirm_id");
$count2->execute();
echo "Thank you for confirming your email address. You are a subscriber of our newsletter script.
<br> Any time you can unsubscribe by visiting a link in your newsletter. ";
}
}
else{echo $msg.'<br>';}

//////////// end of checking data /////////////
}else{ // if condition to check confirm_id > 0
echo " We don't have any record of pending confirmation against your email address,<br>
 you can check by <a href=subscribe.php>subscribing</a> again or contact site admin.";
} // end of if else to check confirm_id >0
}else{ // if execute() fails 

print_r($dbo->errorInfo()); 
}

//////////////////////////////////////////////






echo "</body></html>";
