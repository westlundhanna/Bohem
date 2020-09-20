<?php
// Bygger upp klassen Bostad
class Bostad 
{

    private $kvm;
    private $rok;
    private $pris;
    private $gata;
    private $typ;
    private $omrade;
    private $beskr;
    
    public function __construct($kvm, $rok, $pris, $gata, $typ, $omrade, $beskr) 
    {
        $this -> kvm = $kvm;
        $this -> rok = $rok;
        $this -> pris = $pris;
        $this -> gata = $gata;
        $this -> typ = $typ;
        $this -> omrade = $omrade; 
        $this -> beskr = $beskr;

    }
    public function getKvm()
    {
        return $this -> kvm;
    }
    public function setKvm($kvm)
    {
        $this->kvm = $kvm;
    }
    public function getRok()
    {
        return $this -> rok;
    }
    public function setRok($rok)
    {
        $this ->rok = $rok;
    }
    public function getPris()
    {
        return $this -> pris;
    }
    public function setPris($pris)
    {
        $this ->pris = $pris;
    }
    public function getAdress()
    {
        return $this->gata;
    }
    public function setAdress($gata)
    {
        return $this -> gata = $gata; 
    }
    public function getTyp()
    {
        return $this -> pris;
    }
    public function setTyp($typ)
    {
        return $this -> typ = $typ;
    }
    public function getOmrade()
    {
        return $this -> omrade;
    }
    public function setOmrade($omrade)
    {
        return $this -> omrade = $omrade;
    }
    public function getBeskr()
    {
        return $this -> beskr;
    }
    public function setBeskr($beskr)
    {
        return $this -> beskr = $beskr;
    }
}
?>