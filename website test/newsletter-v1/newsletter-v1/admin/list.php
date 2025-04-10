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
echo "<div id=msg style=\"position:absolute; width:300px; height:25px; 
z-index:1; left: 900px; top: 0px; 
 border: 1px none #000000\"></div>";

////////////////////////////////////////////
require "../config.php"; // Database connection 
///////////////////////////
$start=@$_GET['start'];
if(strlen($start) > 0 and !is_numeric($start)){
echo "Data Error";
exit;
}

$page_name='list.php';
$eu = ($start - 0); 
$limit = 10;                                 // No of records to be shown per page.
$this1 = $eu + $limit; 
$back = $eu - $limit; 
$next = $eu + $limit; 
$sql="SELECT *  FROM `nl_email` order by email_id desc limit $eu, $limit";

$nume = $dbo->query("select count(email_id) from nl_email")->fetchColumn();


$i=1;
echo "<table class='t1'>";
foreach ($dbo->query($sql) as $row) {$m=$i%2;
$rid='r'.$row['email_id'];
$sid='s'.$row['email_id'];
echo "<tr class='r$m'><td><div id=$sid>$row[email_id]</div></td><td><div id=$rid>$row[email]</div></td><td><div id=$row[email_id]><a href=# onClick=ajaxFunction($row[email_id],'change_status','$row[status]')>$row[status]</a></div></td><td><img src=../del.jpg onClick=ajaxFunction($row[email_id],'delete','$row[status]')></td></tr>";
$i=$i+1;}
echo "</table>";
///////// End of display /////////
//////// Paging navigation starts ////////
echo "<table align = 'center' width='50%'><tr><td  align='left' width='30%'>";
//// if our variable $back is equal to 0 or more then only we will display the link to move back ////////
if($back >=0) { 
print "<a href='$page_name?start=$back'><font face='Verdana' size='2'>PREV</font></a>"; 
} 
//////////////// Let us display the page links at  center. We will not display the current page as a link ///////////
echo "</td><td align=center width='30%'>";
$i=0;
$l=1;
for($i=0;$i < $nume;$i=$i+$limit){
if($i <> $eu){
echo " <a href='$page_name?start=$i'><font face='Verdana' size='2'>$l</font></a> ";
}
else { echo "<font face='Verdana' size='4' color=red>$l</font>";}        /// Current page is not displayed as link and given font color red
$l=$l+1;
}


echo "</td><td  align='right' width='30%'>";
///////////// If we are not in the last page then Next link will be displayed. Here we check that /////
if($this1 < $nume) { 
print "<a href='$page_name?start=$next'><font face='Verdana' size='2'>NEXT</font></a>";} 
echo "</td></tr></table>";

//////// Paging navigation ends ///////

echo "</body></html>";
?>



