<?php 

namespace Acme\Repter;

use Stringable;

class Jegy2 implements Stringable
{
    private string $jarat;
    private string $legitarsasag;
    private int $ar;
    private string $honnan;
    private string $hova;
    private string $indulas;

    public function GetJarat(){
        return $this->jarat;
    }
    public function GetLegitarsasag(){
        return $this->legitarsasag;
    }
    public function GetAr(){
        return $this->ar;
    }
    public function GetHonnan(){
        return $this->honnan;
    }
    public function GetHova(){
        return $this->hova;
    }
    public function GetIndulas(){
        return $this->indulas;
    }

    public function __construct($jarat,$legitarsasag,$ar,$honnan,$hova,$indulas){
        $this->jarat = $jarat;
        $this->legitarsasag = $legitarsasag;
        $this->ar = $ar;
        $this->honnan = $honnan;
        $this->hova = $hova;
        $this->indulas = $indulas;
    }

    public function __toString()
    {
        // MINTA
        /*
            [FR5190 - Ryanair]
            Budapest Liszt Ferenc Nemzetközi Repülőtér (BUD) - Karol Wojtyła nemzetközi repülőtér (BRI)
            Indulás: 2021.11.11 15:45
            Ár: 25 000 Ft
         */

        $ar = number_format($this->ar,0, ',',' ');

        return "[$this->jarat - $this->legitarsasag]\n$this->honnan - $this->hova\nIndulás: $this->indulas\nÁr: $ar";
    }

}

?>