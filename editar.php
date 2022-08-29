<?php

session_start();

require "config.php";
require "banco.php";
require "ajudantes.php";
require "classes/Torcedor.php";
require "classes/RepositorioTorcedores.php";

$repositorio_torcedores = new RepositorioTorcedores($pdo);
$torcedor = $repositorio_torcedores->buscar_torcedor($_GET['id']);

$exibir_tabela = false;
$tem_erros = false;

if (array_key_exists('nome', $_POST)) {
    
    if (array_key_exists('telefone', $_POST)) {
        $torcedor->setTelefone($_POST['telefone']);
    } else {
        $torcedor->setTelefone(0);
    }

    if (array_key_exists('email', $_POST)) {
        $torcedor->setEmail($_POST['email']);
    } else {
        $torcedor->setEmail('');
    }

    if (array_key_exists('ativo', $_POST)) {
        $torcedor->setAtivo(true);
    } else {
        $torcedor->setAtivo(false);
    }

    $repositorio_torcedores->editar_torcedor($torcedor);
    header('Location: torcedores.php');
    die();
}

include "template.php";