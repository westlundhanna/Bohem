<?php

class villa extends Bostad
{
    private $kvm;
    private $rok;
    private $pris;
    private $adress;
    private $typ;
    private $omrade;
    private $beskr;

    private $maklare;
    public function __construct($kvm, $rok, $pris, $adress, $typ, $omrade, $beskr, $maklare)
    {
        $this->maklare = $maklare; 
        parent::__construct($kvm, $rok, $pris, $adress, $typ, $omrade, $beskr);
    }

    public function setMaklare($maklare)
    {
        $this->maklare = $maklare;
    }
    public function getMaklare() 
    {
        return $this->maklare;
    }

}
?>