<?php
/**
 * Created by PhpStorm.
 * User: kaido.tikk
 * Date: 8.02.2018
 * Time: 12:45
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
//funktsioon vormi väljastamiseks
// vorme hoiame vorm.html failis
// vormi sisu loeme antud failist ja väljastame
function loeVormFailist($failinimi){
    // väljastame sisu
    $sisu = '';
    // kontrollime vajaliku faili olemasolu
    if(file_exists($failinimi) and is_file($failinimi) and is_readable($failinimi)){
        //saab faili lugeda
        $fp = fopen($failinimi, 'r');
        //loeme failist täissisu
        $sisu = fread($fp, filesize($failinimi));
        fclose($fp); // Paneb ühenduse kinni

    } else {
        echo 'Probleem '.$failinimi.' failiga<br />';
        exit;
    }
    echo $sisu;
}
