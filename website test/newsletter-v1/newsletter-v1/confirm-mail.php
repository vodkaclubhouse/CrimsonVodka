<?Php
/// Post confirmation mail ///////////////
////// Data checking //////////////
if(!is_numeric($mem_id)){
echo "Data Error";
exit; }

if(!(filter_var($email,FILTER_VALIDATE_EMAIL))){
echo "Data Error";
exit; }

$status="F"; //F : Fresh, A : Active

///// end of data checking //////////


/////////////////
//////////////////
$msg='';
///// Random Token ///////
$string1="abcdefghijklmnopqrstuvwxyz";
$string2="1234567890";

$string=$string1.$string2;
$string= str_shuffle($string);
$token =  substr($string,0,8); 
///////////////////////////

$sql=$dbo->prepare("insert into nl_confirm(email_id,email,word,status) values(:email_id,:email,:word,:status)");
$sql->bindParam(':email_id',$mem_id,PDO::PARAM_INT, 6);
$sql->bindParam(':email',$email,PDO::PARAM_STR, 100);
$sql->bindParam(':word',$token,PDO::PARAM_STR, 32);
$sql->bindParam(':status',$status,PDO::PARAM_STR, 1);
if($sql->execute()){
$confirm_id=$dbo->lastInsertId();
}else{
$msg .=print_r($sql->errorInfo()); 
}
////////////////////

$tm=time();
$confirm_link=$base_url."confirm.php?email_id=$mem_id&token=".$token."&tm=".$tm."&confirm_id=".$confirm_id."&email=".$email;
$msg=$msg.$confirm_link;
/////////////////Posting confirmation mail ///////////////
$em=$from_email;    // Change to your email address 
$headers4=$from_email;
$headers="";
$headers .="Reply-to: $from_email\n";
$headers .= "From: $from_email\n"; 
$headers .= "Errors-to: $from_email\n"; 
$headers .="Return-Path:$from_email\r\n";
//$headers = "Content-Type: text/html; charset=iso-8859-1\n".$headers;

$content="Thank you for subscribing to our newsletter. \n
One more step. You need to confirm by visiting this link  \n

$confirm_link

\n\nOr Copy and past this  URL in your browser.  \n\n";

//echo $content;
$sub="Verify your Email address";
mail($email,"$sub",$content,$headers);

//////////////// End of posting mail ////////
?>