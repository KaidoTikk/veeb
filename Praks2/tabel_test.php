<?php
/**
 * Created by PhpStorm.
 * User: kaido.tikk
 * Date: 2.03.2018
 * Time: 9:58
 */
require_once 'tabel.php';
// loome tabeli objekti
$minuTabel = new tabel(array('a', 'b', 'c', 'd'));
// lisame read juurde
$minuTabel->lisaRida(array(1, 2, 3, 4));
$minuTabel->lisaRidaPealkirjadega(array('d'=>1, 'c'=>2, 'b'=>3, 'a'=>4));
$minuTabel->lisaRida(array(5, 6, 7, 8));
// väljastame tabeli objekti test kujul
echo '<pre>';
print_r($minuTabel);
echo '</pre>';
// väljastame tabeli tekst kujul
$minuTabel->prindiTabel();
require_once 'htmlTabel.php';
// loome tabeli objekti
$htmlTabel = new htmlTabel(array('a', 'b', 'c', 'd'), '#ff0066');
// lisame read juurde
$htmlTabel->lisaRida(array(1, 2, 3, 4));
$htmlTabel->lisaRidaPealkirjadega(array('d'=>1, 'c'=>2, 'b'=>3, 'a'=>4));
$htmlTabel->lisaRida(array(5, 6, 7, 8));
// väljastame tabeli objekti test kujul
echo '<pre>';
print_r($htmlTabel);
echo '</pre>';
// väljastame tabeli tekst kujul
$htmlTabel->prindiTabel();