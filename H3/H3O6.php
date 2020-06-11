<?php


$zwemclubs = [
    "De spartelkuikens" => 25,
    "De waterbuffels" => 32,
    "Plonsmderin" => 11,
    "Bommetje" => 23
];


echo '<table>';

foreach ($zwemclubs as $clubnaam => $ledenaantal) {
    echo '<tr>';
    echo '<td class="border">' . $clubnaam . '</td>';
    echo '<td class="border">' . $ledenaantal . '</td>';
    $aantal_plaatjes = floor($ledenaantal / 5);
    echo '<td>';
    for ($i = 0 ; $i < $aantal_plaatjes ; $i++){
        echo '<img src="//unsplash.it/30" alt="Zwemmer">';
    }
    echo '</td>';
    echo '</tr>';









}