<?php

    require_once ('./Brujo.class.php');

    class Nigromante extends Brujo{
        public function __toString(): string{
            return parent::__toString()."Mi especialidad es la nigromancia.";
        }
    }