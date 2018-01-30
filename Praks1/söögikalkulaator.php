<?php
/**
 * Created by PhpStorm.
 * User: kaido.tikk
 * Date: 30.01.2018
 * Time: 11:28
 */
//söögihind
$soogihind = 2.55; // Hind, EUR
$soodustuseProtsent = 15; //
$opilasetoetus = 1.80; // EUR
//arvestus
if($soogihind > 0 and $soodustuseProtsent > o and $opilasetoetus > 0){
    $soodushind =  $soogihind * ((100 - $soodustuseProtsent) / 100);
    $hindopilasele = $soodushind - $opilasetoetus;
    echo 'Söögi hind opilasele = '.$hindopilasele.'<br />';
} else {
    echo 'Andmed ei ole täielikud <br />';
}