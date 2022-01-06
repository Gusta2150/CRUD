<?php

require __DIR__.'/vendor/autoload.php';

use \App\Entity\Carro;

$carros = Carro::getCarros();

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/listagem.php';
include __DIR__.'/includes/footer.php';