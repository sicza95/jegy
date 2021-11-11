<?php

namespace Acme\Mozi;

use Stringable;

class Jegy implements Stringable
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

    public function getCim()
    {
        return $this->cim;
    }

    public function getAr()
    {
        return $this->ar;
    }

    public function getTerem()
    {
        return $this->terem;
    }

    public function getSor()
    {
        return $this->sor;
    }

    public function getUles()
    {
        return $this->ules;
    }

    public function getKezdes()
    {
        return $this->kezdes;
    }

    public function __toString()
    {
        // MINTA
        /*
            Free Guy (990 Ft)
            Spielberg terem 11. sor 4. ülés.
            Kezdés: 2021.11.11 15:45
         */

        $ar = number_format($this->ar,0, ',',' ');

        return "$this->cim ($ar Ft)\n$this->terem terem $this->sor. sor $this->ules. ülés.\nKezdés: $this->kezdes";
    }
}