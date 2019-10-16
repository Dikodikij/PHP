<?php

function tinklapis($x) {
    $data1 = date('Y');

 if ($x >= $data1) {
    echo '&copy' . $data1;
} elseif  ($x < $data1) {
    echo '&copy' . $x . ' - ' . $data1;
}
}
    tinklapis(2010);
?>
<br>
<?php

function copyrightDate($year){
    if ($year >=date('Y')) {
        echo '&copy'. date('Y');
    }
    else {
        echo '&copy' . $year .' - '. date('Y');
    }
}
    copyrightDate(2019);

?>