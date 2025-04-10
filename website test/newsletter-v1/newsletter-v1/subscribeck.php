<?Php
////////////////////////////////////////////
require "config.php";
///////////////////////////
if($_POST['todo']=="post-data"){
$email=$_POST['email'];
$ip=$_SERVER['REMOTE_ADDR'];
}

//$email='testing@example.com';


$msg=""; // Message variable

$row=array("msg"=>"","status_form"=>"OK");
error_reporting(E_ERROR | E_PARSE | E_CORE_ERROR);


if(!(filter_var($email,FILTER_VALIDATE_EMAIL))){
$msg=$msg."Your email address $email is not correct <BR>"; 
$row["status_form"]="NOTOK";
}





$no = $dbo->query("select count(email) from nl_email where email='$email'")->fetchColumn(); 

//echo $no;
if($no > 0 ){
$count=$dbo->prepare("select status,email_id from nl_email where email=:email");
$count->bindParam(":email",$email,PDO::PARAM_STR,100);
if($count->execute()){
$row1 = $count->fetch(PDO::FETCH_OBJ);
if($row1->status == 'F'){
$msg=$msg."Email address already exists. You need to confirm your subscription. Please check your mail, you can request to resend your confirmation mail by <a href='confirm-resend.php?email=$email&email_id=$row1->email_id&todo=resend'>clicking here</a>.";
$row["status_form"]="NOTOK";
}else{
if($row1->status == 'A'){$msg=$msg."You have already subscribed to our newsletter";
$row["status_form"]="NOTOK";}
} // if else for checking status
}// end of if execute 
else{
$msg=$msg.'Database Error'; 
$row["status_form"]="NOTOK";
}
$row["status_form"]="NOTOK";
}


if($row["status_form"]=="OK"){// echo $query;
$status="F"; //F : Fresh, A : Active
$ip=$_SERVER['REMOTE_ADDR']; // if you want to store IP address of visitor

$sql=$dbo->prepare("insert into nl_email(email,status) values(:email,:status)");
$sql->bindParam(':email',$email,PDO::PARAM_STR, 100);
$sql->bindParam(':status',$status,PDO::PARAM_STR, 1);
if($sql->execute()){
$mem_id=$dbo->lastInsertId(); 
require 'confirm-mail.php';  // Post confirmation mail to user address 
}// if sql executed 
else{print_r($sql->errorInfo()); }
//// status is ok now reply the message ///
$row["msg"]=$msg;
$main = array('data'=>array($row)); 
echo json_encode($main); 

} // End of if status is Ok
else{
////// if failes //////////////
$row["msg"]=$msg;
$main = array('data'=>array($row)); 
echo json_encode($main); 



//////////end of if fails////////////////////////////////////
}// end of if else checking status
?>



