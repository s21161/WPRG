<?php
$tab1 = array(1, 3, 5, 7, 1, 3, 5, 7, 1, 2, 4);
$tab2 = array(2, 4, 6, 8, 2, 4, 6, 8, 2, 3, 4);
$iloc = 0;
for ($i=0; $i<sizeof($tab1); $i++) {
    $iloc+=$tab1[$i]*$tab2[$i];
}
echo $iloc;
?>