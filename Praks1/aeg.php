<?php
/**
 * Created by PhpStorm.
 * User: kaido.tikk
 * Date: 21.02.2018
 * Time: 9:46
 */
// Päeva funktsiooni korda seadmine
function paev(){
    $valik = '<select name="paev">';
    for($paev = 1; $paev < 32; $paev++){
        $valik = $valik.'<option value="'.$paev.'">'.$paev.'</option>';
    }
    $valik = $valik.'</select>';
    return $valik;
}
// Kuu funktsiooni korda seadmine
function kuu(){
    $kuud = array();
    for($i = 1; $i < 13; $i++){
        $kuuNimi = date('F', mktime(0, 0, 0, $i));
        $kuuNumber = date('m', mktime(0, 0, 0, $i));
        $kuud[$kuuNumber] = $kuuNimi;
    }
    $valik = '<select name="kuu">';
    foreach($kuud as $kuuNumber => $kuuNimi){
        $valik = $valik.'<option value="'.$kuuNumber.'">'.$kuuNimi.'</option>';
    }
    $valik = $valik.'</select>';
    return $valik;
}
// Aasta funktsiooni korda seadmine
function aasta(){
    $hetkeAasta = date('Y', time());
    $valik = '<select name="aasta">';
    for($aasta = 1925; $aasta < 2040; $aasta++){
        if($aasta == $hetkeAasta){
            $valik = $valik.'<option value="'.$aasta.'" selected>'.$aasta.'</option>';
        }
        $valik = $valik.'<option value="'.$aasta.'">'.$aasta.'</option>';
    }
    $valik = $valik.'</select>';
    return $valik;
}
function registreerimisVorm(){
    echo '
    <form action="" method="post">
        <table>
            <tr>
                <td>Eesnimi</td>
                <td colspan="2"><input type="text" name="eesnimi"></td>
            </tr>
            <tr>
                <td>Perenimi</td>
                <td colspan="2"><input type="text" name="perenimi"></td>
            </tr>
            <tr>
                <td>Aasta</td>
                <td>Kuu</td>
                <td>Päev</td>
            </tr>
            <tr>
                <td>'.aasta().'</td>
                <td>'.kuu().'</td>
                <td>'.paev().'</td>
            </tr>
            <tr>
                <td colspan="3">
                    <input type="submit" value="Registreeri">
                </td>
            </tr>
        </table>
    </form>
    ';
}
registreerimisVorm();

