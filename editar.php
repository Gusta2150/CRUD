<?php

require __DIR__.'/vendor/autoload.php';

define('TITLE','Editar carro');

use \App\Entity\Carro;

//VALIDAÇÃO DO ID
if(!isset($_GET['id']) or !is_numeric($_GET['id'])){
  header('location: index.php?status=error');
  exit;
}


$obVaga = Carro::getCarro($_GET['id']);


if(!$obVaga instanceof Carro){
  header('location: index.php?status=error');
  exit;
}

//VALIDAÇÃO DO POST
if(isset($_POST['chassi'],$_POST['marca'],$_POST['modelo'],$_POST['ano'],$_POST['placa'],$_POST['estilo'])){
  $obVaga->chassi    = $_POST['chassi'];
  $obVaga->marca    = $_POST['marca'];
  $obVaga->modelo    = $_POST['modelo'];
  $obVaga->ano    = $_POST['ano'];
  $obVaga->placa    = $_POST['placa'];
  $obVaga->estilo    = $_POST['estilo'];
  $obVaga->atualizar();

  header('location: index.php?status=success');
  exit;
}

include __DIR__.'/includes/header.php';
include __DIR__.'/includes/formulario.php';
include __DIR__.'/includes/footer.php';