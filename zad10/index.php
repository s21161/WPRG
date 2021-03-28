<?php
$x = rand(2, 10);

function stars($x)
{

    	for ($i = 1; $i <= $x; $i++) {
        for ($j = 1; $j <= $i; $j++) {
            echo("");
        }
        echo("<br>");
    }

    	for ($i = $x; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo("");
        }
        echo("<br>");
    }

   		for ($i = $x; $i > 0; $i--) {
        for ($j = $i; $j < $x; $j++) {
            echo str_repeat("&nbsp;", 2);
        }
        for ($k = 0; $k < $i; $k++) {
            echo("");
        }
        echo("<br>");
    }

    	for ($i = 0; $i < $x; $i++) {
        for ($j = $x; $j > $i + 1; $j--) {
            echo str_repeat("&nbsp;", 2);
        }
        for ($k = 0; $k <= $i; $k++) {
            echo("");
        }
        echo("<br>");
    }
}

stars($x);

?>