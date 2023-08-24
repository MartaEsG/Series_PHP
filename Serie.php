<?php

class Serie {
   private $nombre;
   private $genero;
   private $temporadas;

    public function __construct ($nombre, $genero) {
        $this->nombre = $nombre;
        $this->genero = $genero;
    }

    public function addTemporada($temporada){
        $this->temporadas[] = $temporada;
    }

    public function numCapitulosTemporada($numTemporada){
        foreach ($this->temporadas as $temporada){
            if ($temporada->getNumTemporada()==$numTemporada){
                return $temporada->getTotalCapitulos();
            }
        }
    }

    public function valoracionMedia (){
        $valoracionTotal =0;
        $numCapitulos =0;
        foreach ($this->temporadas as $temporada){
            foreach ($temporada->getCapitulos() as $capitulo){
                $valoracionTotal+=$capitulo->getValoracion();
                $numCapitulos++;
            }
        }
        return $valoracionTotal/$numCapitulos;
    }
}