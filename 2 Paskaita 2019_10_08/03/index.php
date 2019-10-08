<?php
$cities3 = [
    'Tokijas' => [13.6, 1868, 'Japonija'],
    'Vasingtonas' => [0.6, 1790, 'JAV'],
    'Maskva' => [11.5, 1147, 'Rusija']
];
    print_r($cities3);

    $cities3['Londonas'] = [8.6, 43, 'Anglija']; 
echo "<ul>
<li>Gyventoju skaicius: {$cities3['Londonas'][0]} </li>
<li>Ikurtas: {$cities3['Londonas'][1]}</li>
<li>Salis: {$cities3['Londonas'][2]}</li>
</ul>"
?>