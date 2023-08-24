<?php

class Temporada {
    private $year;
    private $numTemporada;
    private $capitulos;

    public function __construct($year, $numTemporada)
    {
        $this->year = $year;
        $this->numTemporada = $numTemporada;
        
    }

    public function addCapitulos ($capitulo){
        $this->capitulos[] = $capitulo;
    }

    /**
     * Get the value of numTemporada
     */ 
    public function getNumTemporada()
    {
        return $this->numTemporada;
    }

    public function getTotalCapitulos(){
        return count($this->capitulos);
    }

    /**
     * Get the value of capitulos
     */ 
    public function getCapitulos()
    {
        return $this->capitulos;
    }
}