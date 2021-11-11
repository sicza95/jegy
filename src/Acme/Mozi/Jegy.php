<?php

namespace Acme\Mozi;

class Jegy
{
    private $cim; //Szöveg, a filmnek a címe.
    private $ar; //Egész érték, forintban értelmezendő.
    private $terem; //Szöveg, a terem neve, ahol a filmet vetítik.
    private $sor; //Egész, a sor száma.
    private $ules; //Egész, adott ülés száma a soron belül.
    private $kezdes; //Szöveg, a film kezdetének időpontja, ami a dátumot és az időt is tartalmazza.

    public function __construct($cim, $ar, $terem, $sor, $ules, $kezdes)
    {
        $this->cim = $cim;
        $this->ar = $ar;
        $this->terem = $terem;
        $this->sor = $sor;
        $this->ules = $ules;
        $this->kezdes = $kezdes;
    }
}