<?php
$temp = [4, 3, 9, 19, 19, 9, 12, 20, 24, 20, 12, 14, 18, 21, 20, 23, 16, 16, 15, 19, 19, 17, 17, 15, 12, 13, 13, 15, 19, 21];
foreach ($temp as $tempOfDay){
    echo $tempOfDay .'<br>';
}
$sumT =  array_sum($temp);
$vidutTemp = ($sumT / count($temp));
echo "<h2>$vidutTemp</h2>";
echo(round('15.8',0)). '<br>';
echo "Vidutine Balandzio men temperatura 16 lapsniu <br>";
    rsort($temp);
        for ($i=0;$i<count($temp);$i++){
        echo $temp[$i]. '<br>';
        }
$pirmiPenki = array_slice($temp,0,5,);
foreach ($pirmiPenki as $pirmi){
    echo "<li>$pirmi</li>";
}
$paskutiniaiPenki = array_slice($temp,25,5);
foreach ($paskutiniaiPenki as $paskutiniai){
    echo "<h1>$paskutiniai</h1>";
}
?>