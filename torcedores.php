<?php 

require "banco.php";
require "ajudantes.php";
require "classes/Torcedor.php";
require "classes/RepositorioTorcedores.php";

$repositorio_torcedores = new RepositorioTorcedores($conexao);

$exibir_tabela = true;
$tem_erros = false;
$erros_validacao = [];

$torcedor = new Torcedor();
$torcedor->setAtivo(true);

if (array_key_exists('nome', $_POST)) {

    $torcedor->setNome($_POST['nome']);

    if (array_key_exists('documento', $_POST)) {   
        $torcedor->setDocumento($_POST['documento']);
    } else {
        $tem_erros = true;
        $erros_validacao['documento'] = 'O documento do torcedore é obrigatório';
    }

    if (array_key_exists('cep', $_POST)) {   
        $torcedor->setCep($_POST['cep']);
    } else {
        $tem_erros = true;
        $erros_validacao['cep'] = 'O cep do torcedore é obrigatório';
    }

    if (array_key_exists('endereco', $_POST)) {   
        $torcedor->setEndereco($_POST['endereco']);
    } else {
        $tem_erros = true;
        $erros_validacao['endereco'] = 'O endereço do torcedore é obrigatório';
    }

    if (array_key_exists('bairro', $_POST)) {   
        $torcedor->setBairro($_POST['bairro']);
    } else {
        $tem_erros = true;
        $erros_validacao['bairro'] = 'O bairro do torcedore é obrigatório';
    }
    
    if (array_key_exists('cidade', $_POST)) {   
        $torcedor->setCidade($_POST['cidade']);
    } else {
        $tem_erros = true;
        $erros_validacao['cidade'] = 'A cidade do torcedore é obrigatória';
    }

    if (array_key_exists('uf', $_POST)) {   
        $torcedor->setUf($_POST['uf']);
    } else {
        $tem_erros = true;
        $erros_validacao['uf'] = 'O estado do torcedore é obrigatório';
    }

    if (array_key_exists('telefone', $_POST)) {   
        $torcedor->setTelefone($_POST['telefone']);
    } else {
        $tem_erros = true;
        $erros_validacao['telefone'] = 'O telefone do torcedore é obrigatório';
    }

    if (array_key_exists('email', $_POST)) {   
        $torcedor->setEmail($_POST['email']);
    } else {
        $tem_erros = true;
        $erros_validacao['email'] = 'O email do torcedore é obrigatório';
    }

    if (array_key_exists('ativo', $_POST)) {
        $torcedor->setAtivo(1);
    } else {
        $torcedor->setAtivo(0);
    }

    $repositorio_torcedores->salvar($torcedor);
    header('Location: torcedores.php');
    die();
}

$lista_torcedores = $repositorio_torcedores->buscar_torcedores();

include "template.php";