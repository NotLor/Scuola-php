<?php
class Carta
{
    private $seme;
    private $numero;
    private $valore;

    public function __construct($seme, $numero, $valore)
    {
        $this->seme = $seme;
        $this->numero = $numero;
        $this->valore = $valore;
    }

    public function getSeme()
    {
        return $this->seme;
    }

    public function getNumero()
    {
        return $this->numero;
    }

    public function getValore()
    {
        return $this->valore;
    }   
}