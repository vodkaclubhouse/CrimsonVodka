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
$sql="SELECT count(*) as total_records, status FROM `nl_email` group by status ";
echo "<table class='t1'>";
foreach ($dbo->query($sql) as $row) {
echo "<tr ><td>$row[status]</td><td>$row[total_records]</td></tr>";
}
echo "</table>";


echo "</body></html>";
?>



