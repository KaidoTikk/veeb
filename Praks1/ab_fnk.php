<?php
/**
 * Created by PhpStorm.
 * User: kaido.tikk
 * Date: 22.02.2018
 * Time: 13:30
 */
require_once 'ab_k.php';
// ühendus ab serveriga
function yhendus(){
    $ab_yhendus = mysqli_connect(AB_HOST, AB_USER, AB_PASS, AB_NIMI);
    if($ab_yhendus == false){
        echo 'Probleem andmebaasi ühendamisega<br />';
        echo mysqli_connect_error().'<br />';
        echo mysqli_connect_errno().'<br />';
        exit;
    } else {
        echo 'Ühendus on loodud<br />';
    }
    return $ab_yhendus;
}
// päringute edastamine andmebaasi
function saadaAndmed($ab_yhendus, $sql){
    $tulemus = mysqli_query($ab_yhendus, $sql);
    if($tulemus ==  false){
        echo 'Probleem päringuga '.$sql.' <br />';
        echo mysqli_error($ab_yhendus);
        echo mysqli_errno($ab_yhendus);
        return false;
    } else {
        return $tulemus; // true või andmed
    }
}