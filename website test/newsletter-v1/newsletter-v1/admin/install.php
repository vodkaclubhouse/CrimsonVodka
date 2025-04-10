<!doctype html public "-//w3c//dtd html 3.2//en">
<html>
<head>
<title>Admin area Newsletter subscription</title>
<META NAME="DESCRIPTION" CONTENT=" ">
<META NAME="KEYWORDS" CONTENT="">
<link rel="stylesheet" href="../style.css" type="text/css">
</head>
<body>
<?Php
///////////////////////////

if(@$_POST['todo']=="add_details"){
require "../config.php";
$userid=$_POST['userid'];
$password=$_POST['password'];
$password2=$_POST['password2'];

$msg='';
$status_form='';

if(!ctype_alnum($userid)){
$msg=$msg."Please use characters or  numbers for your User ID<BR>";
$status_form="NOTOK";
}

if ( strlen($userid)< 4 OR strlen($userid) > 15) {
$msg=$msg."User ID should not be less than 4 and more than 15 character length<BR>";
$status_form="NOTOK";
}

if ( strlen($password)< 6 ) {
$msg=$msg."Password  should not be less than 6 length<BR>";
$status_form="NOTOK";
}


if ( $password <> $password2) {
$msg=$msg."Password does not match with re-typed password<br>"; 
$status_form="NOTOK";
}

if($status_form<>"NOTOK"){
////////// encryption stats ////////
$cost = 10;
$salt = strtr(base64_encode(mcrypt_create_iv(16, MCRYPT_DEV_URANDOM)), '+', '.');
$salt = sprintf("$2a$%02d$", $cost) . $salt;
$hash = crypt($password, $salt);
//echo $hash;
$sql=$dbo->prepare("insert into nl_admin(userid,password) values(:userid,:password)");
$sql->bindParam(':userid',$userid,PDO::PARAM_STR, 100);
$sql->bindParam(':password',$hash,PDO::PARAM_STR, 100);
if($sql->execute()){

echo "<table class='t1'><tr><td class='r0'> <b>Admin details added</b>  <br><br>
Remove this install.php file and then use login.php file to use Admin area
<br>
<br>Read the instructions at <br><br><a href=http://www.plus2net.com/php_tutorial/newsletter-admin.php>http://www.plus2net.com/php_tutorial/newsletter-admin.php</a>  <br><br> </td></tr></table>";

}
}else{




echo "<table class='t1'><tr><td class='r0'> $msg 
<br>Read the instructions at <br><br><a href=http://www.plus2net.com/php_tutorial/newsletter-admin.php>http://www.plus2net.com/php_tutorial/newsletter-admin.php</a>  <br><br> </td></tr></table>";


echo "<INPUT TYPE=\"button\" VALUE=\"Back\" onClick=\"history.go(-1);\">";
} // end of if else status_form<> OK 

}else{
////////////Checking installation support ///
$status_installation='';
$status_msg='';
if(!function_exists('mcrypt_create_iv')){
$status_msg .="<br>mcrypt_create_iv function support is NOT available ";
$status_installation='NOTOK';
}

if (!extension_loaded('mcrypt')) {
echo "<br>mcrypt support is loaded ";
$status_msg .="<br>mcrypt support is NOT loaded  ";
$status_installation='NOTOK';
}






if($status_installation<>'NOTOK'){
//////// display form /////////////
echo "<br><br><br>
<table class='t1'>
";
echo "<tr class='r0'><td colspan=2>";
require '../check.php';
echo "</td></tr>";
echo "<form name='myForm' action='' method=post><input type=hidden name=todo value='add_details'>
<tr class='r1'><td>User ID</td><td><input type=text name='userid'></td></tr>
<tr class='r0'><td>Password</td><td><input type=password name='password'></td></tr>
<tr class='r0'><td>Password ( Re type) </td><td><input type=password name='password2'></td></tr>

<tr class='r1'><td></td><td ><input type=submit value='Add details'></td></tr>

</table></form>";
}else{


}// end of if else checking installation 
} // end of else if status_form <>OK 






//////////////////////////////////////////////






echo "</body></html>";
