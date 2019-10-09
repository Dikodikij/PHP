<?php
$ceu = ['Italija'=>'Roma', 'Liuksemburgas'=>'Liuksemburgas', 'Belgija'=> 'Briuselis', 'Danija'=>'Kopenhaga', 'Suomija'=>'Helsinkis', 'Prancūzija' => 'Paryžius', 'Slovakija'=>'Bratislava', 'Slovenija'=>'Liublijana', 'Vokietija' => 'Berlynas', 'Graikija' => 'Atėnai', 'Airija'=>'Dublinas', 'Nyderlandai'=>'Amsterdamas', 'Portugalija'=>'Lisabona', 'Ispanija'=>'Madridas', 'Švedija'=>'Stokholmas', 'Didžioji Britanija'=>'Londonas', 'Kipras'=>'Nikosija', 'Lietuva'=>'Vilnius', 'Čekija'=>'Praha', 'Estija'=>'Talinas', 'Vengrija'=>'Budapeštas', 'Latvija'=>'Ryga', 'Malta'=>'Valeta', 'Austrija' => 'Viena', 'Bulgarija' => 'Sofija', 'Rumunija' => 'Bukareštas', 'Lenkija'=>'Varšuva'];
// echo count($ceu);
?>
    <ol>
            <?php
                foreach ($ceu as $salis => $sostine) {
                echo "<li>$sostine</li>";
            }
            ?>
    </ol>
    <ul>
        <?php
            foreach ($ceu as $salis => $sostine){
            echo "<li>$salis, $sostine</li>";
            }
        ?>
    </ul>