<?php

namespace Torcedores\Models;

class RepositorioTorcedores
{
    private $pdo;

    public function __construct(\PDO $pdo)
    {
        $this->pdo = $pdo;
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
                (:nome, :documento, :cep, :endereco, :bairro, :cidade, :uf, :telefone, :email, :ativo)
                ";
        $query = $this->pdo->prepare($sqlSalvar);
        $query->execute([
            'nome' => $torcedor->getNome(),
            'documento' => $torcedor->getDocumento(),
            'cep' => $torcedor->getCep(),
            'endereco' => $torcedor->getEndereco(),
            'bairro' => $torcedor->getBairro(),
            'cidade' => $torcedor->getCidade(),
            'uf' => $torcedor->getUf(),
            'telefone' => $torcedor->getTelefone(),
            'email' => $torcedor->getEmail(),
            'ativo' => $torcedor->getAtivo(),
        ]);
    }

    public function editar_torcedor(Torcedor $torcedor)
    {
        $sqlEditar = "UPDATE torcedores SET
                            telefone = :telefone,
                            email = :email,
                            ativo = :ativo
                        WHERE id = :id";
        $query = $this->pdo->prepare($sqlEditar);

        $query->execute([
            'id' => $torcedor->getId(),
            'telefone' => $torcedor->getTelefone(),
            'email' => $torcedor->getEmail(),
            'ativo' => $torcedor->getAtivo(),
        ]);
    }

    public function buscar_torcedores(): array
    {
        $sqlBusca = "SELECT * FROM torcedores";
        $resultado = $this->pdo->query($sqlBusca, \PDO::FETCH_CLASS, 'Torcedores\Models\Torcedor');
        
        $torcedores = [];
        
        foreach ($resultado as $torcedor) {
            $torcedores[] = $torcedor;
        }
    
        return $torcedores;
    }

    public function buscar_torcedor(int $torcedor_id)
    {
        $sqlBusca = "SELECT * FROM torcedores WHERE id = :id";
        $query = $this->pdo->prepare($sqlBusca);

        $query->execute([
            'id' => $torcedor_id,
        ]);

        $torcedor = $query->fetchObject('Torcedores\Models\Torcedor');

        return $torcedor;
    }

    public function remover_torcedor(int $id)
    {
        $sqlRemover = "DELETE FROM torcedores WHERE id = :id";
        $query = $this->pdo->prepare($sqlRemover);
        
        $query->execute([
            'id' => $id
        ]);
    }
}
