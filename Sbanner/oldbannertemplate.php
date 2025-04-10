<?php

/* ######### CONFIGURATION ######### */

$imgname = 'newviewblured.png';
$extension = 'png';
$font = 'Pacifico.ttf';
$dbfile = "db.txt";
$extension = 'png';


date_default_timezone_set('Africa/Cairo');



/* ######### CONFIGURATION END ######### */

$patch = dirname(__FILE__).'/';
header('Content-Type: image/'.$extension);

// Function to get the client IP address
function get_client_ip() {
    $ipaddress = '';
    if ($_SERVER['HTTP_CLIENT_IP'])
        $ipaddress = $_SERVER['HTTP_CLIENT_IP'];
    else if($_SERVER['HTTP_X_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED_FOR'];
    else if($_SERVER['HTTP_X_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_X_FORWARDED'];
    else if($_SERVER['HTTP_FORWARDED_FOR'])
        $ipaddress = $_SERVER['HTTP_FORWARDED_FOR'];
    else if($_SERVER['HTTP_FORWARDED'])
        $ipaddress = $_SERVER['HTTP_FORWARDED'];
    else if($_SERVER['REMOTE_ADDR'])
        $ipaddress = $_SERVER['REMOTE_ADDR'];
    else
        $ipaddress = 'UNKNOWN';
    return $ipaddress;
}
$currents_ip = get_client_ip();

//Connect to database
$db = file($dbfile);
for($i=0;$i<count($db);$i++) 
{ 
	if($i == 0)
	{
		list(
		$status[$i],
		$address[$i],
		$port[$i],
		$server_name[$i],
		$user_online[$i],
		$user_max[$i],
		$server_version[$i],
		$ping[$i],
		$packet_lost[$i],
		$news[$i]
		) = explode(" | ", $db[$i]);
	}
	else
	{
		list(
		$database_id[$i],
		$nickname[$i],
		$unique_id[$i],
		$client_version[$i],
		$os[$i],
		$country[$i],
		$client_ip[$i]
		) = explode(" | ", $db[$i]);
	}
}

$news = base64_decode($news[0]);	
$found = array_search($currents_ip, $client_ip);
$time = date("g:i a");
$data = date("d.m.y");


$welcome = "Hey ☺";
$on = "";
$severname = '';

$online = "Online:";
$datatxt = "Date:";
$timetext = "Time:";
$pingtxt = "Ping:";
$countrytxt = "Flag:";
$elgw = "Cairo: ";
$image_url='https://galwaycitypoint.com/wp-content/uploads/2015/09/wifi-256.png';


$url = "http://api.openweathermap.org/data/2.5/weather?q=Cairo&lang=en&units=metric&APPID=3bba129b6362fe774270862f9ec5ca62";


$contents = file_get_contents($url);
$clima=json_decode($contents);

$temp_max=$clima->main->temp_max;

$icon=$clima->weather[0]->icon.".png";


 
	
$img = imagecreatefrompng($imgname);
$color =  ImageColorAllocate($img, 0, 255, 0);
$kolor =  ImageColorAllocate($img, 255, 255, 255);
$border = imagecolorallocate($image, 0, 0, 255);

imagettftext($img, 20, 0, 190, 230, $kolor, $patch. $font, $news );

imagettftext($img, 30, 0, 20, 260, $kolor, $patch. $font, $welcome );
imagettftext($img, 30, 0, 80, 260, $color, $patch. $font, $nickname[$found]);
imagettftext($img, 30, 0, 147, 30, $color, $patch. $font, $on );
imagettftext($img, 30, 0, 30, 200, $color, $patch. $font, $severname );


imagettftext($img, 30, 0, 20, 30, $kolor, $patch. $font, $online );
imagettftext($img, 30, 0, 130, 30, $color, $patch. $font, $user_online[0]+0);

imagettftext($img, 30, 0, 240, 30, $kolor, $patch. $font, $datatxt);
imagettftext($img, 30, 0, 320, 30, $color, $patch. $font, $data);

imagettftext($img, 30, 0, 810, 30, $kolor, $patch. $font, $timetext);
imagettftext($img, 30, 0, 890, 30, $color, $patch. $font, $time);

imagettftext($img, 30, 0, 520, 30, $kolor, $patch. $font, $pingtxt);
imagettftext($img, 30, 0, 600, 30, $color, $patch. $font, ''.number_format($ping[0],0,',','').' ms');

imagettftext($img, 30, 0, 880, 260, $kolor, $patch. $font, $countrytxt);
imagettftext($img, 30, 0, 960, 260, $color, $patch. $font, $country[$found]);

imagettftext($img, 30, 0, 400, 260, $kolor, $patch. $font, $elgw);
imagettftext($img, 30, 0, 495, 260, $color, $patch. $font, ''.$temp_max.'°C');


imagealphablending($img,false);
imagesavealpha($img,true);
imagepng($img);
imagedestroy($img);
die;



?>