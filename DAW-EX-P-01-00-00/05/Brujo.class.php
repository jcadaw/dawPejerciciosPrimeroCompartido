<?php

    class Brujo{
        public const PUNTOS_VIDA_INICIAL = 100;
        protected string $nombre;
        protected string $color;
        protected string $alineacion;
        protected int $experiencia;
        protected bool $puedeLevitar;

        private const ENCANTAMIENTOS = ["Rayo", "Bola", "Parálisis", "Bruma", "Ola"];

        public function __construct(string $nombre, string $color, string $alineacion, int $experiencia, bool $puedeLevitar=false){
            $this->nombre = $nombre;
            $this->color = $color;
            $this->alineacion = $alineacion;
            $this->experiencia = $experiencia;
            $this->puedeLevitar = $puedeLevitar;
        }

        public function lanzarEncantamiento(){
            return self::ENCANTAMIENTOS[rand(0,4)];
        }
    }