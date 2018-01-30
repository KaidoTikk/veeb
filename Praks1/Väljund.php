<?php
/**
 * Created by PhpStorm.
 * User: kaido.tikk
 * Date: 30.01.2018
 * Time: 10:24
 */
// ühereline kommentaar
/*
 * Mitme
 * realine
 * kommentaar
 */
//Väljastamine
// echo või print abil
echo "Aine - Veebiprogrameerimine"; // käsu lõpp - ;
print "<br>"; // Reavahetus br ehk break
print "Valikaine";
// muutujate defineerimine
$eesNimi = "Kaido"; // Eesnimi, string
$pereNimi = "Tikk"; // Perenimi, string
$bussiNumber = 4; // bussi number, integer
$soiduKestvus = 0.8; // sõidu kestvus, 0.8 tundi, float
//konstantite defineerimine
define('NUMBER_P1', 3.14);
//Kasutades eel defineeritud muutujad ja konstandid
//väljasta ilusa teksti
echo 'Olen '.$eesNimi.' '.$pereNimi.'<br />';
echo 'Sõidan koolist kesklinna bussiga number '.$bussiNumber.'<br />';
echo 'Jõuan kesklinna '.$soiduKestvus.' tunniga<br />';
echo 'Midagi konstantset? P1 = '.NUMBER_P1.'<br />';
//tingimuslaused
$ilmväljas = 'Sajab lund';
if($ilmväljas == 'Sajab lund'){
    echo 'Tuleb minna sauna<br />';
}
else {
    echo 'Pole mõttet sauna minna<br />';
}
// ? operaatori - ternary operaator
echo ($ilmväljas == 'Sajab lund') ? 'Tuleb minna sauna<br />' : 'Pole mõttet sauna minna<br />';