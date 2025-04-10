<?php

//units=For temperature in Celsius use units=metric
//5128638 is new york ID
//http://api.openweathermap.org/data/2.5/weather?q=Cairo&appid=3bba129b6362fe774270862f9ec5ca62

$url = "http://api.openweathermap.org/data/2.5/weather?q=Cairo&lang=en&units=metric&APPID=3bba129b6362fe774270862f9ec5ca62";


$contents = file_get_contents($url);
$clima=json_decode($contents);

$temp_max=$clima->main->temp_max;
$temp_min=$clima->main->temp_min;
$icon=$clima->weather[0]->icon.".png";
//how get today date time PHP :P
$today = date("F j, Y, g:i a");
$cityname = $clima->name; 

echo $cityname . " - " .$today . "<br>";
echo "Temp Max: " . $temp_max ."&deg;C<br>";
echo "Temp Min: " . $temp_min ."&deg;C<br>";
echo "<img src='http://openweathermap.org/img/w/" . $icon ."'/ >";


if ($icon == "01d.png")
{
  echo "<img src = '../weathericon/04d.png'>";
  echo "Kosomak";
}

?>