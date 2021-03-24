<?php

    require_once ('./Brujo.class.php');
    require_once ('./BrujoHielo.class.php');
    require_once ('./Nigromante.class.php');

    $b1 = new Brujo("Braulio", "Amarillo", "Neutral", 120);
    echo "{$b1->lanzarEncantamiento()} <br />";


    $b2 = new BrujoHielo("Braulio Helado", "Azul", "Legal", 100);
    echo "{$b2->lanzarEncantamiento()} <br />";


    $b3 = new Nigromante("Braulio Nigromante", "Negro", "Caótico", 60);
    echo "{$b3->lanzarEncantamiento()} <br />";
