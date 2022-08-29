<?php

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
    header('Location: index.php?rota=torcedores');
    die();
}

require __DIR__ . "/../views/template.php";