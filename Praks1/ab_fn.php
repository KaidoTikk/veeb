<?php
/**
 * Created by PhpStorm.
 * User: kaido.tikk
 * Date: 22.02.2018
 * Time: 13:30
 */
require_once 'ab_konf.php';
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