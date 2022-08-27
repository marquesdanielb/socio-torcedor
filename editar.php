<?php

session_start();

require "banco.php";

if (array_key_exists('nome', $_GET) && $_GET['nome'] != '') {
    $torcedor = [
        'id' => $_GET['id'],
        'nome' => $_GET['nome'],
        'documento' => $_GET['documento'],
        'cep' => $_GET['cep'],
        'endereco' => $_GET['endereco'],
        'bairro' => $_GET['bairro'],
        'cidade' => $_GET['cidade'],
        'uf' => $_GET['uf'],
        'telefone' => $_GET['telefone'],
        'email' => $_GET['email'],
        'ativo' => $_GET['ativo'],
    ];

    if (array_key_exists('telefone', $_GET)) {
        $torcedor['telefone'] = $_GET['telefone'];
    } else {
        $torcedor['telefone'] = 0;
    }

    if (array_key_exists('email', $_GET)) {
        $torcedor['email'] = $_GET['email'];
    } else {
        $torcedor['email'] = 0;
    }

    editar_torcedor($torcedor, $conexao);
    header('Location: torcedores.php');
    die();
}

require "template.php";