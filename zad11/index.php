<?php

echo "Pangramem";
$pang = string('test');
$pang = strtolower($pang);
$alphabet = range('a', 'z');
$pangramem  = true;

foreach($alphabet as $x){
    if(!str_contains($pang, $x)){
    $pangramem = false;
    break;
    }
	}
if($pangramem){
    echo " słowo jest panagramem";}
else{
    echo " słowo nie jest panagramem";}
?>