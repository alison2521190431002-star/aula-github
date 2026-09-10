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
        $sql = "SELECT * FROM pessoas";

        $stmt = $this->conexao->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function buscarPorId(int $id): ?array
    {
        $sql = "SELECT * FROM pessoas WHERE id = :id";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        $stmt->execute();

        $pessoa = $stmt->fetch(PDO::FETCH_ASSOC);

        return $pessoa ?: null;
    }

    public function atualizar(Pessoa $pessoa): bool
    {
        $sql = "UPDATE pessoas SET
                nome = :nome,
                telefone = :telefone,
                cpf = :cpf,
                endereco = :endereco
            WHERE id = :id";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(':nome', $pessoa->getNome());
        $stmt->bindValue(':telefone', $pessoa->getTelefone());
        $stmt->bindValue(':cpf', $pessoa->getCpf());
        $stmt->bindValue(':endereco', $pessoa->getEndereco());
        $stmt->bindValue(':id', $pessoa->getId(), PDO::PARAM_INT);

        return $stmt->execute();
    }

    public function excluir(int $id): bool
    {
        $sql = "DELETE FROM pessoas WHERE id = :id";

        $stmt = $this->conexao->prepare($sql);

        $stmt->bindValue(':id', $id, PDO::PARAM_INT);

        return $stmt->execute();
    }
}