<?php

session_start();

require "banco.php";
require "ajudantes.php";
require "classes/Torcedor.php";
require "classes/RepositorioTorcedores.php";

$repositorio_torcedores = new RepositorioTorcedores($conexao);

$exibir_tabela = false;
$tem_erros = false;

$torcedor = $repositorio_torcedores->buscar_torcedor($_GET['id']);

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
        $torcedor->setAtivo(1);
    } else {
        $torcedor->setAtivo(0);
    }

    $repositorio_torcedores->editar_torcedor($torcedor, $conexao);
    header('Location: torcedores.php');
    die();
}

require "template.php";