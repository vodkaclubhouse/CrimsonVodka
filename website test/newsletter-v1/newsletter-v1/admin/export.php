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

echo "<br><br><a href=export-child.php>Click here to Download CSV file</a>";

echo "</body></html>";
?>



