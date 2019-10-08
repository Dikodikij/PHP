<?php
$cities = ['Berlynas', 'Roma', 'Londonas'];
$cities[] = 'Tokijas';
print_r($cities);

echo "<ul>
    <li> $cities[1]
    </li>
    </ul>";
$cities2 = [
    'Tokijas' => 13.6,
    'Vasingtonas' => 0.6,
    'Maskva' => 11.5
];
// cities2['Londonas'] = 8.6; patikrinimas
print_r($cities2);
echo "<ul>Gyventoju skaicius: $cities2[Tokijas] mln. </ul>"
?>