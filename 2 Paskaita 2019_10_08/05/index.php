<?php
$cities4 = ['Tokijas', 'Vašingtonas', 'Maskva', 'Londonas'];
print_r($cities4);
?>
    <ul>

        <?php 
            for ($i=0; $i<count($cities4); $i++) { 
                echo "<li>$cities4[$i]</li>"; 
        }
        ?>
    </ul>
    <ul>
        <?php
        foreach ($cities4 as $city) {
            echo $city . '<br>';
        }
        ?>
    </ul>