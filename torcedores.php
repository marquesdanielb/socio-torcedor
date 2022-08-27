<?php 

require "banco.php";

if (array_key_exists('nome', $_GET) && $_GET['nome'] != '') {
    $torcedor = [];

    $torcedor['nome'] = $_GET['nome'];
    
    if (array_key_exists('documento', $_GET)) {   
        $torcedor['documento'] = $_GET['documento'];
    } else {
        $torcedor['documento'] = 0;
    }

    if (array_key_exists('cep', $_GET)) {   
        $torcedor['cep'] = $_GET['cep'];
    } else {
        $torcedor['cep'] = 0;
    }

    if (array_key_exists('endereco', $_GET)) {   
        $torcedor['endereco'] = $_GET['endereco'];
    } else {
        $torcedor['endereco'] = '';
    }

    if (array_key_exists('bairro', $_GET)) {   
        $torcedor['bairro'] = $_GET['bairro'];
    } else {
        $torcedor['bairro'] = '';
    }
    
    if (array_key_exists('cidade', $_GET)) {   
        $torcedor['cidade'] = $_GET['cidade'];
    } else {
        $torcedor['cidade'] = '';
    }

    if (array_key_exists('uf', $_GET)) {   
        $torcedor['uf'] = $_GET['uf'];
    } else {
        $torcedor['uf'] = '';
    }

    if (array_key_exists('telefone', $_GET)) {   
        $torcedor['telefone'] = $_GET['telefone'];
    } else {
        $torcedor['telefone'] = '';
    }

    if (array_key_exists('email', $_GET)) {   
        $torcedor['email'] = $_GET['email'];
    } else {
        $torcedor['email'] = '';
    }

    if (array_key_exists('ativo', $_GET)) {   
        $torcedor['ativo'] = false;
    } else {
        $torcedor['ativo'] = true;
    }

    salvar($torcedor, $conexao);
    header('Location: torcedores.php');
    die();
}

$lista_torcedores = buscar_torcedores($conexao);

include "template.php";