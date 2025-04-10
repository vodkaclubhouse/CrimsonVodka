<?Php
session_start();
echo "<!doctype html public \"-//w3c//dtd html 3.2//en\">
<html>
<head>
<title>Admin area Newsletter subscription</title>
<META NAME=\"DESCRIPTION\" CONTENT=\" \">
<META NAME=\"KEYWORDS\" CONTENT=\"\">
<link rel=\"stylesheet\" href=\"../style.css\" type=\"text/css\">
</head><body>";
include 'check.php';
$post_id=$_GET['post_id'];
if(!is_numeric($post_id)){
echo "Data Error";
exit; }
require "../config.php"; // Database connection 

$count=$dbo->prepare("select * from nl_post where post_id=:post_id");
$count->bindParam(":post_id",$post_id,PDO::PARAM_INT,4);

if($count->execute()){
echo " Success <br>";
$row = $count->fetch(PDO::FETCH_OBJ);
$sub=$row->sub;
$post=$row->post;
}else{
echo "Database Error ..";
print_r($count->errorInfo()); 

exit;
}
/////////////////////////

$dtl="This is not a SPAM, you have subscribed to receive periodic newsletter from us. If you feel it is a mistake then visit the unsubscribe link at the end of this email. 
 \n------------------------\n\n";

$dtl .=$post. " \n------------------------\n\n";



@$headers.="Reply-to: $from_email\n"; 
$headers .= "From: $from_email\n"; 
$headers .= "Errors-to: $from_email\n"; 
//$headers = "Content-Type: text/html; charset=iso-8859-1\n".$headers;
// Above line is required to send HTML email 
$sql="select email_id, email from nl_email where status='A'"; 
$i=0;
foreach ($dbo->query($sql) as $row) {
$url=$base_url."unsubscribe.php?email_id=$row[email_id]&email=$row[email]&todo=delete";
$dtl .= "<a href=$url>Unsubscribe</a>  or \n\n
Visit this URL  $url ";


if(mail($row['email'],$sub,$dtl,$headers)){
$i=$i+1;
}

} // end of foreach loop 

echo " Total Number of Mails Posted = $i ";
//echo "<br>$dtl";
///////////////////////


////////////////////////////////////////////
require "../config.php"; // Database connection 
///////////////////////////


echo "</body></html>";
?>



