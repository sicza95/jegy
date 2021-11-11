<?php 

namespace Acme\Repter;

use Stringable;

class Jegy implements Stringable
{
    private string $jarat = "a járat kódjra pl.: FR5190.";
    private string $legitarsasag = "a légitársaság neve.";
    private int $ar = 0;  //forintban értelmezendő.
    private string $honnan = "az indulási reptér neve pl.: Budapest Liszt Ferenc
                                Nemzetközi Repülőtér (BUD).";
    private string $hova = "a célállomás pl.:Karol Wojtyła nemzetközi repülőtér
                            (BRI).";
    private string $indulas = "az indulás pontos ideje.";

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


}

    /* Az osztály implementálja a Stringable interface-t, továbbá valósítsa meg a
     * __toString() metódust, ami a mintának megfelelően megjeleníti az osztály
     * tulajdonságait.
     * A __tostring() metódusban ne alkalmazzon HTML kódot!
     * Az ár formázásához használja a number_format metódust!   */




?>