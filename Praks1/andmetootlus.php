<?php
/**
 * Created by PhpStorm.
 * User: kaido.tikk
 * Date: 22.02.2018
 * Time: 13:07
 */
// võtame kasutusele andmebaasitöötlusfunktsioonid
require_once 'ab_fn.php';
echo '<pre>';
print_r($_POST);
echo '</pre>';
// kui on soov kasutada muutujad samade nimedega
// nagu vormi elementide nimetused
// siis kasuta
extract($_POST);
// kontrollime, mis sai
echo $eesnimi.'<br />';
echo $perenimi.'<br />';
echo $aasta.'<br />';
echo $kuu.'<br />';
echo $paev.'<br />';
// ehitame ajaväärtus DATE formaadi järgi
$aeg = $aasta.'-'.$kuu.'-'.$paev;
echo $aeg.'<br />';
// tekitame ühendus ab serveriga
$yhendus = yhendus();
// andmete saatmiseks koostame päring
$sql = 'INSERT INTO test SET '.
    'eesnimi="'.$eesnimi.'", '.
    'perenimi="'.$perenimi.'", '.
    'aeg="'.$aeg.'"';
// saadame päring andmebaasi
$tulemus = saadaAndmed($yhendus, $sql);
if ($tulemus != false) {
    echo 'Andemed on salvestatud<br />';
}