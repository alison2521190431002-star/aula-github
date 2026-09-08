<?php

namespace App\DAO;

use App\Model\Pessoa;
use App\Config\Conexao;
use PDO;

class PessoaDAO
{
    private PDO $conexao;

    public function __construct()
    {
        $conexao = new Conexao();
        $this->conexao = $conexao->conectar();
    }

    public function inserir(Pessoa $pessoa): bool
    {
        $sql = "INSERT INTO pessoas
                (nome, telefone, cpf, endereco)
                VALUES
                (:nome, :telefone, :cpf, :endereco)";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(':nome', $pessoa->getNome());
        $stmt->bindValue(':telefone', $pessoa->getTelefone());
        $stmt->bindValue(':cpf', $pessoa->getCpf());
        $stmt->bindValue(':endereco', $pessoa->getEndereco());

        return $stmt->execute();
    }

    public function listar(): array
    {
        $sql = "SELECT id, nome, cpf, telefone, endereco
                FROM pessoas
                ORDER BY id DESC";

        $stmt = $this->conexao->prepare($sql);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function pesquisar(string $busca): array
    {
        $sql = "SELECT id, nome, cpf, telefone, endereco
                FROM pessoas
                WHERE nome LIKE :busca
                   OR cpf LIKE :busca
                   OR telefone LIKE :busca
                ORDER BY nome ASC";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(':busca', '%' . $busca . '%');

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}

