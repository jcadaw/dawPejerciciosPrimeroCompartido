<?php

    require_once ('./Brujo.class.php');

    class BrujoHielo extends Brujo{

        public function __toString(): string{
            return parent::__toString()."Mi especialidad es el hielo.";
        }
    }