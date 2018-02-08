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
// kutsume funktsiooni tööle
//kui oled õpilane
$soogihind = soogihind( 2.65,  true,  true);
echo 'Prae hind õpilasele = '.round($soogihind, 2).'<br />';
//Prae hind omanikule
$soogihind = soogihind( 2.65,  true,  false);
echo 'Prae hind omanikule = '.round($soogihind, 2).'<br />';
//Prae täishind
$soogihind = soogihind( 2.65);
echo 'Prae hind = '.round($soogihind, 2).'<br />';