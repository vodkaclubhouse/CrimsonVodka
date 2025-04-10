<?Php
session_start();
echo "<!doctype html public \"-//w3c//dtd html 3.2//en\">
<html>
<head>
<title>Admin area Newsletter subscription</title>
<META NAME=\"DESCRIPTION\" CONTENT=\" \">
<META NAME=\"KEYWORDS\" CONTENT=\"\">
<link rel=\"stylesheet\" href=\"../style.css\" type=\"text/css\">
<SCRIPT language=JavaScript src='list.js'>
</script>
</head><body>";
include 'check.php';

////////////////////////////////////////////
require "../config.php"; // Database connection 
///////////////////////////
$todo=@$_GET['todo'];


echo "<br><br><br><a href=clean.php?todo=delete_old>Click here to delete records more than 2 days old ( pending in confirmation table )</a>";

if($todo=='delete_old'){
$count=$dbo->prepare("delete FROM `nl_confirm` WHERE  `dtt` < DATE_SUB(CURDATE(), INTERVAL 2 DAY)");
if($count->execute()){
$no=$count->rowCount();
echo "<br><br> Total $no of records delete ";
}else{
print_r($sql->errorInfo()); 
}
}



echo "</body></html>";
?>



