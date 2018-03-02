<?php
/**
 * Created by PhpStorm.
 * User: kaido.tikk
 * Date: 2.03.2018
 * Time: 10:03
 */
class tekst
{
    // klassi muutujad
    // klassi omadused
    // class variables
    var $sonad = '';
    // klassi tegevused
    // klassi meetodid
    // class methods
    /**
     * tekst constructor.
     * @param string $sonad
     */
    public function __construct($sonad = ''){
        $this->maaraTekst($sonad);
    }
    function maaraTekst($sonad){
        $this->sonad = $sonad;
    }
    function prindiTekst(){
        echo $this->sonad.'<br />';
    }
}