<?php

$rza = 4;
$kol = 3;
if (!is_numeric($rza) || !is_numeric($kol)) 
{
    echo("BŁĄD");
    return;
}
else
{
$wym = array(array());

for ($i = 0; $i < $rza; $i++) 
{
    for ($j = 0; $j < $kol; $j++) 
    {
        $wym[$i][$j] = 2;
    }
}

for ($i = 0; $i < $rza; $i++) 
{
    for ($j = 0; $j < $kol; $j++) 
    {
        echo($wym[$i][$j] . " ");
    }
    echo("<br>");
}

echo("<br>Transpozycja<br>");
for ($i = 0; $i < $kol; $i++) 
{
    for ($j = 0; $j < $rza; $j++) 
    {
        echo($wym[$j][$i] . " ");
    }
    echo("<br>");
    }
}

?>