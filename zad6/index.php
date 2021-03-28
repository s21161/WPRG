<?php
    $boka = 3;
    $bokb = 4;
    $bokc = 5;

    if ($boka + $bokb > $bokc && $boka + $bokc > $bokb && $bokb + $bokc > $boka){
        echo ("Trójkąt jest możliwy");
    }else {
        echo("BŁĄD");
    }
?>