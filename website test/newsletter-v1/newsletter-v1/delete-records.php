<?Php
////////////////////////////////////////////
require "config.php";

$count=$dbo->prepare("TRUNCATE nl_confirm");
$count->execute();
$no=$count->rowCount();
echo " No of records delete from nl_confirm = ".$no;
////////////
//$count=$dbo->prepare("TRUNCATE nl_email");
$count=$dbo->prepare("delete from  nl_email");
$count->execute();
$no=$count->rowCount();
echo " <br>No of records delete from nl_email = ".$no;

?>