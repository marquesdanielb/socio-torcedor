<?php

$bdServidor = '127.0.0.1';
$bdUsuario = 'adminallblack';
$bdSenha = 'root';
$bdBanco = 'torcedores';

$conexao = mysqli_connect($bdServidor, $bdUsuario, $bdSenha, $bdBanco);

function salvar($torcedor, $conexao)
{
    $sqlSalvar = "INSERT INTO torcedores 
                (nome, documento, cep, endereco, bairro, cidade, uf, telefone, email, ativo)
                VALUES
                ('{$torcedor['nome']}',
                '{$torcedor['documento']}',
                {$torcedor['cep']},
                '{$torcedor['endereco']}',
                '{$torcedor['bairro']}',
                '{$torcedor['cidade']}',
                '{$torcedor['uf']}',
                '{$torcedor['telefone']}',
                '{$torcedor['email']}',
                '{$torcedor['ativo']}')
                ";

    mysqli_query($conexao, $sqlSalvar);
}

function buscar_torcedores($conexao)
{
    $sqlBusca = "SELECT * FROM torcedores";
    $resultado = mysqli_query($conexao, $sqlBusca);

    $torcedores = [];

    while ($torcedor = mysqli_fetch_assoc($resultado)) {
        $torcedores[] = $torcedor;
    }

    return $torcedores;
}

function buscar_torcedor($id, $conexao)
{
    $sqlBusca = "SELECT * FROM torcedores WHERE id =".$id;
    $resultado = mysqli_query($conexao, $sqlBusca);

    return mysqli_fetch_assoc($resultado);
}

function editar_torcedor($torcedor, $conexao)
{
    $sqlEditar = "UPDATE torcedores SET
                    telefone = {$torcedor['telefone']},
                    email = '{$torcedor['email']}',
                    ativo = {$torcedor['ativo']}
                WHERE id={$torcedor['id']}";
    var_dump($sqlEditar);
    mysqli_query($conexao, $sqlEditar);
}

function remover_torcedor($id, $conexao)
{
    $sqlRemover = "DELETE FROM torcedores WHERE id=".$id;

    mysqli_query($conexao, $sqlRemover);
}