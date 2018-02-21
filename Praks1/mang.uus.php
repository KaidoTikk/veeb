<?php
/**
 * Created by PhpStorm.
 * User: kaido.tikk
 * Date: 14.02.2018
 * Time: 13:37
 */
$katsetearv = $_POST['katsetearv'];
$katsetearv = isset($katsetearv) ? ++$katsetearv : 0;
echo '
     <form method="post" action="'.$_SERVER['PHP_SELF'].'">
        Sisesta arv vahemikus 0-50: 
         <input type="number" name="kasutajaArv"><br />
         <input type="hidden" name="katsetearv" value="'.$katsetearv.'">
         <input type="submit" value="Kontrolli">
     </form>
 ';

// määrame arvu
$serveriArv = 10;
$kasutajaArv = $_POST['kasutajaArv'];
// kontrollime kasutaja väärtus
echo $kasutajaArv;
// kontrollime, kas arv on edastatud
if(!empty($_POST['kasutajaArv'])){
       // määrame arvu
       $serveriArv = 10;
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
            echo 'Arvu ära aramiseks läks '.$katsetearv.' korda<br />';
            exit;
        }
      echo 'Oled juba hästi lähedal<br />';
   }
} else {
    echo 'Arv peab olema sisestatud!';
}