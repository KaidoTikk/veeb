<?php
/**
 * Created by PhpStorm.
 * User: kaido.tikk
 * Date: 30.01.2018
 * Time: 11:28
 */
// funktsioon soodustuse arvutamiseks
/**
 * @param $taishind
 * @param $sooduskaart
 * @param $kasoledopilane
 */
function soogihind($taishind, $sooduskaart = false, $kasoledopilane = false){
// funktsiooni algus
    $soodustuseProtsent = 15; // %
    $opilasetoetus = 1.80; // EUR
    $soodushind = $taishind;
    if ($sooduskaart){
        $soodushind =  $taishind * ((100 - $soodustuseProtsent) / 100);
    }
    if($kasoledopilane){
        $soodushind = $soodushind - $opilasetoetus;
        // $soodushind - $opilasetoetus; // - op
    }
    return $soodushind;
}//funktsioooni lõpp
//Testimiseks paneme erinevad väärtused paika
// kasutame selleks  massiivi kujul(sooduskarrt, kasoledõpilane)
// 1. real on opilase andmed
// 2. real on opetaja andmed
// 3. real on kulastaja andmed
$kasutajad = array(
    array(
        'roll' => 'opilane',
        'soodus' => true,
        'opilasekaart' => true
    ),
    array(
        'roll' => 'opetaja',
        'soodus' => true,
        'opilasekaart' => false
    ),
    array(
        'roll' => 'kulaline',
        'soodus' => false,
        'opilasekaart' => false
    )
);
$praed = array(
    array(
        'Nimetus' => 'Šnitsel',
        'Kirjeldus' => 'šnitsel sealihast, lisand, kaste, salat, leib',
        'Hind' => 2.68
    ),
    array(
        'Nimetus' => 'Seapraad',
        'Kirjeldus' => 'seapraad, lisand, kaste, salat, leib',
        'Hind' => 2.65
    ),
    array(
        'Nimetus' => 'Hakklihapallid tomatikastmes',
        'Kirjeldus' => 'hakklihapall 2 tk, lisand, kaste, salat, leib',
        'Hind' => 2.30
    ),
    array(
        'Nimetus' => 'Hakklihapallid tomatikastmes 1/2',
        'Kirjeldus' => 'hakklihapall, lisand, kaste, salat, leib',
        'Hind' => 1.30
    )
);
foreach ($praed as $praad){
    echo '<h1>'.$praad['Nimetus'].'</h1>';
    echo '<code>'.$praad['Kirjeldus'].'</code><br />';
    echo '<ul>';
    foreach ($kasutajad as $kasutaja){
        $soogiHind = soogiHind($praad['Hind'], $kasutaja['soodus'], $kasutaja['opilaskaart']);
        echo '<dd>Prae hind '.$kasutaja['roll'].' = '.round($soogiHind, 2).' €</dd><br />';
    }
    echo '</ul>';
}
/*for($i = 0; $i < count($kasutajad); $i++)
{
    $soogihind = soogihind( 2.65,$kasutajad[$i][0],$kasutajad[$i][1]);
    echo 'Prae hind = '.round($soogihind, 2).'<br />';
}
*/