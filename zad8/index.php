<?php
$a = 5;
$b = 6;
$c = 7;

while ($a <= 0 || $b <=0){
    $a = 5;
    $b = 6;
    $c = 7;
}

function zamiana(&$z, &$m){
    $m = $v;
	$v = $z;
    $z = $m;
}

if($a > $b) zamiana($a, $b);
if($b > $c) zamiana($b, $c);
if($a > $b) zamiana($a, $b);

print($a.' '.$b.' '.$c."\n");
print($c.' '.$b.' '.$a);
?>