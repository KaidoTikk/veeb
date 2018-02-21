<?php
/**
 * Created by PhpStorm.
 * User: kaido.tikk
 * Date: 21.02.2018
 * Time: 9:24
 */
session_start();
if(!isset($_SESSION['serveriArv'])){
    if(!isset($_SESSION['serveriArv']) and !isset($_SESSION['katseteArv'])){
        $_SESSION['serveriArv'] = rand(1, 50);
            $_SESSION['katseteArv'] = 0;
    } else {
        $serveriArv = $_SESSION['serveriArv'];
            $katseteArv = ++$_SESSION['katseteArv'];
    }
 // kontrollimiseks vaatame $_SESSION massiivi
 echo '<pre>';
 print_r($_SESSION);
 echo '</pre>';

 // trükime andmetega täidetud vorm
 echo '
     <form method="post" action="'.$_SERVER['PHP_SELF'].'">
         Sisesta arv vahemikus 1-50: 
         <input type="number" name="kasutajaArv"><br />
         <input type="submit" value="Kontrolli">
     </form>
 ';
 // kontrollime, kas arv on edastatud
 if(!empty($_POST['kasutajaArv'])){
     // määrame arvu
     $kasutajaArv = $_POST['kasutajaArv'];
     if($kasutajaArv > $serveriArv){
         echo 'Pakutud väärtus on suurem<br />';
     }
     if ($kasutajaArv < $serveriArv) {
         echo 'Pakutud väärtus on väiksem<br />';
     }
     if (abs($kasutajaArv-$serveriArv)<=5){
         if($kasutajaArv == $serveriArv){
             echo 'Arvasid ära!<br />';
             echo 'Arv on '.$serveriArv.'<br />';
             echo 'Arvu ära aramiseks läks '.$katseteArv.' korda<br />';
             unset($_SESSION['katseteArv']);
             exit;
         }
         echo 'Oled juba hästi lähedal<br />';
     }
 } else {
     echo 'Arv peab olema sisestatud!';
 }