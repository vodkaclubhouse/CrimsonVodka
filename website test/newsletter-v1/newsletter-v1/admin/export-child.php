<?Php
session_start();

////////////////////////////////////////////
require "../config.php"; // Database connection 
///////////////////////////
if((isset($_SESSION['userid']) and strlen($_SESSION['userid']) > 4)){
$sql="select * FROM nl_email"; // Database query to get records

header("Content-type: application/octet-stream");
header("Content-Disposition: attachment; filename='my-student-data.csv'");
$data = "";

$query = $dbo->prepare("select *  FROM nl_email");
$query->execute();

for($i=0; $row = $query->fetch(PDO::FETCH_NUM); $i++){
$data.="$row[0],$row[1],$row[2]"."\n";
}

unset($dbo); 
unset($query);

echo $data;
}// End of session checking
?>



