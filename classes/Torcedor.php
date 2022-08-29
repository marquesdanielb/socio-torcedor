<?php

class Torcedor
{
    private $id = 0;
    private $nome = '';
    private $documento = '';
    private $cep = 0;
    private $endereco = '';
    private $bairro = '';
    private $cidade = '';
    private $uf = '';
    private $telefone = '';
    private $email = '';

    public function setId(int $id)
    {
        $this->id = (int) $id;
    }

    function getId(): int
    {
        return $this->id;
    }

    public function setNome(string $nome)
    {
        $this->nome = $nome;
    }

    function getNome(): string
    {
        return $this->nome;
    }

    public function setDocumento(string $documento)
    {
        $this->documento = $documento;
    }

    function getDocumento(): string
    {
        return $this->documento;
    }

    public function setCep(int $cep)
    {
        $this->cep = $cep;
    }

    function getCep(): int
    {
        return $this->cep;
    }

    public function setEndereco(string $endereco)
    {
        $this->endereco = $endereco;
    }

    function getEndereco(): string
    {
        return $this->endereco;
    }

    public function setBairro(string $bairro)
    {
        $this->bairro = $bairro;
    }

    function getBairro(): string
    {
        return $this->bairro;
    }

    public function setCidade(string $cidade)
    {
        $this->cidade = $cidade;
    }

    function getCidade(): string
    {
        return $this->cidade;
    }

    public function setUf(string $uf)
    {
        $this->uf = $uf;
    }

    function getUf(): string
    {
        return $this->uf;
    }

    public function setTelefone(string $telefone)
    {
        $this->telefone = $telefone;
    }

    function getTelefone(): string
    {
        return $this->telefone;
    }

    public function setEmail(string $email)
    {
        $this->email = $email;
    }

    function getEmail(): string
    {
        return $this->email;
    }

    public function setAtivo(bool $ativo)
    {
        $this->ativo = $ativo;
    }

    function getAtivo(): bool
    {
        return $this->ativo;
    }
}
