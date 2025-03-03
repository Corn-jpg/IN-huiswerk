<?php
function toonSpelbord($blauw, $geel, $groen, $rood) {
    // Initialiseer het bord als een lege string
    $bord = '';

    // Vul het bord met lege posities
    for ($i = 0; $i < 40; $i++) {
        $bord .= '. ';
    }

    // Vervang de posities met de pionnen
    $bord[$blauw * 2] = 'B';
    $bord[$geel * 2] = 'Y';
    $bord[$groen * 2] = 'G';
    $bord[$rood * 2] = 'R';

    // Toon het bord
    echo str_repeat('=', 90) . "\n";
    echo $bord . "\n";
    echo str_repeat('=', 90) . "\n";
}

// Voorbeeld aanroep van de functie
toonSpelbord(0, 10, 20, 30);
?>
