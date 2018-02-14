<?php
/**
 * Created by PhpStorm.
 * User: kaido.tikk
 * Date: 14.02.2018
 * Time: 13:37
 */
echo '
     <form method="post" action="'.$_SERVER['PHP_SELF'].'">
        Sisesta arv vahemikus 0-50: 
        <input type="number" name="kasutajaArv"><br />
         <input type="submit" value="Kontrolli">
     </form>
';


// määrame arvu
$serveriArv = 10;
$kasutajaArv = $_POST['kasutajaArv'];
// kontrollime kasutaja väärtus
echo $kasutajaArv;