<?php

    class Brujo{
        public const PUNTOS_VIDA_INICIAL = 100;
        public string $nombre;
        protected string $color;
        private string $alineacion;
        private int $experiencia;
        private bool $puedeLevitar;

        public function __construct(string $nombre, string $color, string $alineacion, int $experiencia, bool $puedeLevitar=false){
            $this->nombre = $nombre;
            $this->color = $color;
            $this->alineacion = $alineacion;
            $this->experiencia = $experiencia;
            $this->puedeLevitar = $puedeLevitar;
        }
    }