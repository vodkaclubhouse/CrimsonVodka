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
//require "../config.php"; // Database connection 
///////////////////////////


echo "

<form name=f1 method=post action=postck.php>
<input type=text name=sub><br>
<textarea name=post rows=20 cols=80>$post</textarea><br>
<input type=Submit value='Save & Post'>
</form>
";
echo "</body></html>";
?>



