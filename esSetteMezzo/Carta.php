<?php
class Carta
{
    private $seme;
    private $valore;

    public function __construct($seme, $valore)
    {
        $this->seme = $seme;
        $this->valore = $valore;
    }

    private $carte = array(
        "seme" => array("fiori", "quadri", "cuori", "picche"),
        "valore" => array("asso", "due", "tre", "quattro", "cinque", "sei", "sette", "donna", "cavallo", "re"),
    );

    function getCarta(){
        return $this->carte[$this->seme][$this->valore];
    }
}