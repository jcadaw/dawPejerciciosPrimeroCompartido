<?php

    require_once ('./Brujo.class.php');

    class Nigromante extends Brujo{
        private int $maxInvocaciones;
        private int $numInvocaciones;

        public function __construct(string $nombre, string $color, string $alineacion, int $experiencia, int $maxInvocaciones, bool $puedeLevitar=false){
            $this->maxInvocaciones = $maxInvocaciones;
            $this->numInvocaciones = 0;
            parent::__construct($nombre, $color, $alineacion, $experiencia, $puedeLevitar);
        }

        public function __toString(): string{
            return parent::__toString()."Mi especialidad es la nigromancia.";
        }

        public function invocarCriaturaLegendaria(){
            if($this->numInvocaciones < $this->maxInvocaciones){
                $this->numInvocaciones++;
                echo "Creada una nueva criatura legendaria... por ejemplo... un dragón. Llevas {$this->numInvocaciones} invocaciones.<br />";
            }
            else {
                echo "Solo puedes invocar un máximo de {$this->maxInvocaciones} invocaciones... y ya las tienes.<br />";
            }
        }

        public function levantarMuerto(){
            if($this->numInvocaciones < $this->maxInvocaciones){
                $this->numInvocaciones++;
                echo "Acabas de levantar a un muerto... te sigue fielmente. Llevas {$this->numInvocaciones} invocaciones.<br />";
            }
            else {
                echo "Solo puedes invocar un máximo de {$this->maxInvocaciones} invocaciones... y ya las tienes.<br />";
            }
        }


    }