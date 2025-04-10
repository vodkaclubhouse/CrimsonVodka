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
$email_id=$_GET['email_id'];
$email=$_GET['email'];
if(!is_numeric($email_id)){
echo "Data Error";
exit; }


$count=$dbo->prepare("select count(email_id)  as no from nl_email  where email_id=:email_id and email=:email and status='A'");
$count->bindParam(":email_id",$email_id,PDO::PARAM_INT,4);
$count->bindParam(":email",$email,PDO::PARAM_STR,100);

if($count->execute()){
$num = $count->fetch(PDO::FETCH_OBJ);
//echo " No records: ".$num->no;
if($num->no ==1){
///////// checking the input data with record ////////////
$flag='OK';
$count=$dbo->prepare("delete from nl_email where email_id=$email_id");
$count->execute();
echo 'Thanks , your email address is removed from our list';
}else{
echo 'No matching record, Please contact siteadmin '; 
}
}
else{ echo 'No matching record, Please contact siteadmin '; 

print_r($dbo->errorInfo()); 
}

//////////////////////////////////////////////






echo "</body></html>";
