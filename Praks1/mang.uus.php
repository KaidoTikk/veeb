<?php
/**
 * Created by PhpStorm.
 * User: kaido.tikk
 * Date: 14.02.2018
 * Time: 13:37
 */
$katsetearv = $_POST['katsetearv'];
$serveriarv = $_POST['serveriarve'];
$katsetearv = isset($katsetearv) ? ++$katsetearv : 0;
$serveriarv = isset($serveriarv) ? $serveriarv : rand(1, 50);
echo '
     <form method="post" action="'.$_SERVER['PHP_SELF'].'">
        Sisesta arv vahemikus 0-50: 
         <input type="number" name="kasutajaArv"><br />
         <input type="hidden" name="katsetearv" value="'.$katsetearv.'">
         <input type="hidden" name="serveriarv" value="'.$serveriarv.'">
         <input type="submit" value="Kontrolli">
     </form>
 ';

// kontrollime, kas arv on edastatud
if(!empty($_POST['kasutajaArv'])){
       // määrame arvu
      // $serveriArv = 10;
       $kasutajaArv = $_POST['kasutajaArv'];
       if($kasutajaArv > $serveriarv){
               echo 'Pakutud väärtus on suurem<br />';
   }
   if ($kasutajaArv < $serveriarv) {
               echo 'Pakutud väärtus on väiksem<br />';
   }
    if (abs($kasutajaArv-$serveriarv)<=5){
        if($kasutajaArv == $serveriarv){
            echo 'Arvasid ära!<br />';
            echo 'Arv on '.$serveriarv.'<br />';
            echo 'Arvu ära aramiseks läks '.$katsetearv.' korda<br />';
            exit;
        }
      echo 'Oled juba hästi lähedal<br />';
   }
} else {
    echo 'Arv peab olema sisestatud!';
}