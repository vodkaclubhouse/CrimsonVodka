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

////////////////////////////////////////////
require "../config.php"; // Database connection 
///////////////////////////
$post=$_POST['post'];
$sub=$_POST['sub'];
$dt=date("Y-m-d");

$sql=$dbo->prepare("insert into nl_post(sub,post,dt) values(:sub,:post,:dt)");
$sql->bindParam(':sub',$sub,PDO::PARAM_STR, 200);
$sql->bindParam(':post',$post,PDO::PARAM_STR);
$sql->bindParam(':dt',$dt,PDO::PARAM_STR,10);
if($sql->execute()){
$post_id=$dbo->lastInsertId(); 
echo " Thanks . It is saved and now posting the mails <br>Post Id = $post_id ";
echo " <br><br><a href=posting-all.php?post_id=$post_id>postClick here to send this newsletter to all the subscribers</a> ";
}
else{
echo " Not able to add data please contact Admin ";
print_r($sql->errorInfo()); 
}

echo "</body></html>";
?>



