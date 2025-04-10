<?Php
session_start();

////////////////////////////////////////////
require "../config.php";
///////////////////////////
if($_POST['todo']=="login"){
$userid=$_POST['userid'];
$password=$_POST['password'];
}


$msg=""; // Message variable

$row_msg=array("msg"=>"","status_form"=>"OK");
error_reporting(E_ERROR | E_PARSE | E_CORE_ERROR);


$count=$dbo->prepare("select password from nl_admin where userid=:userid");
$count->bindParam(":userid",$userid,PDO::PARAM_STR,100);

if($count->execute()){

$row = $count->fetch(PDO::FETCH_OBJ);
if (crypt($password, $row->password) === $row->password) {

if(file_exists('install.php') or file_exists('installck.php')){
$row_msg["status_form"]="NOTOK";
$msg .='For security reasons, remove install.php & installck.php  files from this folder. You can login after that.';
}else{
$_SESSION['userid']=$userid;
$msg .= 'success';
}
}else{
$row_msg["status_form"]="NOTOK";
$msg .='Failed to login';
}


}



$row_msg["msg"]=$msg;
$main = array('data'=>array($row_msg)); 
echo json_encode($main); 


?>
