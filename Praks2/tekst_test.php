<?php
/**
 * Created by PhpStorm.
 * User: kaido.tikk
 * Date: 2.03.2018
 * Time: 10:04
 */
require_once 'tekst.php';
// loome teksti objekti
// määrame kindlas sõnad tekstis
$minuTekst = new tekst('Tere Maailm!');
// väljastame objekti sisu test kujul
echo '<pre>';
print_r($minuTekst);
echo '</pre>';
// väljastame objekti korralikult
$minuTekst->prindiTekst();
echo '<hr />';
require_once 'vTekst.php';
// loome teksti objekti
// määrame kindlas sõnad tekstis
$varvituTekst = new vTekst('Värvitu Tekst');
// väljastame objekti sisu test kujul
echo '<pre>';
print_r($varvituTekst);
echo '</pre>';
// väljastame objekti korralikult
$varvituTekst->prindiTekst();
// loome teksti objekti
$roosaTekst = new vTekst('Roosa Tekst', '#ff0066');
// väljastame objekti sisu test kujul
echo '<pre>';
print_r($roosaTekst);
echo '</pre>';
// väljastame objekti korralikult
$roosaTekst->prindiTekst();