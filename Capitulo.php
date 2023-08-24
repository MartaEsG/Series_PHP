<?php

class Capitulo extends Emulti {
    private $titulo;
    private $fecha;
    private $valoracion;
    private $numCapitulo;

    public function __construct($titulo, $fecha, $valoracion, $numCapitulo, $duracion)
    {
        $this->titulo = $titulo;
        $this->fecha = $fecha;
        $this->valoracion = $valoracion;
        $this->numCapitulo = $numCapitulo;
        parent::__construct($duracion);
    }

    /**
     * Get the value of valoracion
     */ 
    public function getValoracion()
    {
        return $this->valoracion;
    }
}