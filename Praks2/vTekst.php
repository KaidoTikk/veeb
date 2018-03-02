<?php
/**
 * Created by PhpStorm.
 * User: kaido.tikk
 * Date: 2.03.2018
 * Time: 10:05
 */
require_once 'tekst.php';
class vTekst extends tekst
{
    // klassi omadus ehk muutuja
    var $tekstiVarv = '';
    public function __construct($sonad = '', $varv = '')
    {
        parent::__construct($sonad);
        $this->maaraVarv($varv);
    }
    function maaraVarv($varv){
        $this->tekstiVarv = $varv;
    }
    function prindiTekst()
    {
        if($this->tekstiVarv == ''){
            parent::prindiTekst();
        } else {
            echo '<font color="'.$this->tekstiVarv.'">'.$this->sonad.'</font><br />';
        }
    }
}