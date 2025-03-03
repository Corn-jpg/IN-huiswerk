<?php
function toonSpelbord($blauw, $geel, $groen, $rood) {
    // Laat het spelbord zien
    $bord = '';

    for ($i = 0; $i < 39; $i++) {
        $bord .= '. ';
    }

    // Plaatst pionnen
    $bord[$blauw * 2] = 'B';
    $bord[$geel * 2] = 'Y';
    $bord[$groen * 2] = 'G';
    $bord[$rood * 2] = 'R';



    // Toon het bord
    echo herhaalTekens('=', 78) . "\n";
    echo $bord . "\n";
    echo herhaalTekens('=', 78) . "\n";
}

    // Functie om een reeks van tekens te herhalen
    function herhaalTekens($teken, $aantal) {
        $resultaat = '';
        for ($i = 0; $i < $aantal; $i++) {
            $resultaat .= $teken;
        }
        return $resultaat;
    }

toonSpelbord(0, 10, 20, 30);
?>
