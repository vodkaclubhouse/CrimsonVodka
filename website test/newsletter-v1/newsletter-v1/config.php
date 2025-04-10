<?Php

$base_url='http://www.example.com/t/newsletter-v1/'; // Change this to your site URL and Path
$from_email='userid@example.com'; // Change this email id to your id 

///////// Database Details change here  ////
$dbhost_name = "localhost";
$database = "newsletter-v1";
$username = "root";
$password = "test";

//////// Do not Edit below /////////
try {
$dbo = new PDO('mysql:host=localhost;dbname='.$database, $username, $password);
} catch (PDOException $e) {
print "Error!: " . $e->getMessage() . "<br/>";
die();
}

?> 