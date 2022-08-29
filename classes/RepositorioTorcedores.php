<?php

class RepositorioTorcedores
{
    private $conexao;

    public function __construct(mysqli $conexao)
    {
        $this->conexao = $conexao;
    }

    public function Salvar(Torcedor $torcedor)
    {
        $nome = $torcedor->getNome();
        $documento = $torcedor->getDocumento();
        $cep = $torcedor->getCep();
        $endereco = $torcedor->getEndereco();
        $bairro = $torcedor->getBairro();
        $cidade = $torcedor->getCidade();
        $uf = $torcedor->getUf();
        $telefone = $torcedor->getTelefone();
        $email = $torcedor->getEmail();
        $ativo = $torcedor->getAtivo();


        $sqlSalvar = "INSERT INTO torcedores 
                (nome, documento, cep, endereco, bairro, cidade, uf, telefone, email, ativo)
                VALUES
                ('{$nome}',
                '{$documento}',
                {$cep},
                '{$endereco}',
                '{$bairro}',
                '{$cidade}',
                '{$uf}',
                '{$telefone}',
                '{$email}',
                '{$ativo}')
                ";

        $this->conexao->query($sqlSalvar);
    }

    public function editar_torcedor(Torcedor $torcedor)
    {
        $id = $torcedor->getId();
        $telefone = $torcedor->getTelefone();
        $email = $torcedor->getEmail();
        $ativo = $torcedor->getAtivo();

        $sqlEditar = "UPDATE torcedores SET
                    telefone = '{$telefone}',
                    email = '{$email}',
                    ativo = {$ativo}
                WHERE id={$id}";

        $this->conexao->query($sqlEditar);
    }

    public function buscar_torcedores(): array
    {
        $sqlBusca = "SELECT * FROM torcedores";
        $resultado = $this->conexao->query($sqlBusca);
        
        $torcedores = [];
        
        while ($torcedor = $resultado->fetch_object('Torcedor')) {
            $torcedores[] = $torcedor;
        }
    
        return $torcedores;
    }

    public function buscar_torcedor(int $torcedor_id)
    {
        $sqlBusca = "SELECT * FROM torcedores WHERE id =".$torcedor_id;
        $resultado = $this->conexao->query($sqlBusca);

        $torcedor = $resultado->fetch_object('Torcedor');

        return $torcedor;
    }

    public function remover(int $torcedor_id)
    {
        $sqlRemover = "DELETE FROM torcedores WHERE id=".$id;

        $this->conexao->query($sqlRemover);
    }
}
