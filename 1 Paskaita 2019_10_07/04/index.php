<?php
$temp = 18;
 if ($temp < -35 || $temp > 35) {
    echo "Turbūt kalbame ne apie Lietuvos orus.";
} elseif ($temp < 0 ) {
    echo "Ar vis dar žiema?";
} elseif ($temp < 10) {
    echo "Kada gi ateis pavasaris?";
} elseif  ($temp >=10 && $temp < 20) {
    echo "Pagaliau pavasaris!";
} elseif ($temp >= 20) {
    echo "Gal jau vasara?";
}
?>