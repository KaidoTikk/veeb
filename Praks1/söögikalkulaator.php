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
    array(true,true),
    array(true, false),
    array(false, false)
);
// vaatme kasutajad massiivi läbi
// fort (tjm defineerimine; tjm kehtivuse kontroll, tjm suurendamine/vähendamine
for($i = 0; $i < count($kasutajad); $i++)
{
    $soogihind = soogihind( 2.65,$kasutajad[$i][0],$kasutajad[$i][1]);
    echo 'Prae hind = '.round($soogihind, 2).'<br />';
}
