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

        public function lanzarEncantamiento(): string{
            return self::ENCANTAMIENTOS[rand(0,4)];
        }

        public function __toString(): string{
//Con el siguiente... no haría falta redefinir los __toString de las clases hijas
/* 
            return "Soy un ".get_class($this).". Me llamo {$this->nombre}, 
                mi color es el {$this->color}, 
                mi alineación es {$this->alineacion}, 
                mi experiencia es {$this->experiencia}"
                .(($this->puedeLevitar)?" y puedo levitar.":".");
*/
            return "Soy un Brujo. Me llamo {$this->nombre}, 
                    mi color es el {$this->color}, 
                    mi alineación es {$this->alineacion}, 
                    mi experiencia es {$this->experiencia}"
                    .(($this->puedeLevitar)?" y puedo levitar.":".");
        }
    }