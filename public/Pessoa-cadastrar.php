<?php

require_once __DIR__ . '/../vendor/autoload.php';

use App\Model\Pessoa;
use App\DAO\PessoaDAO;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header('Location: pessoa-create.php');
    exit;
}

$pessoa = new Pessoa();

$pessoa->setNome($_POST['nome'] ?? '');
$pessoa->setTelefone($_POST['telefone'] ?? '');
$pessoa->setCpf($_POST['cpf'] ?? '');
$pessoa->setEndereco($_POST['endereco'] ?? '');

$dao = new PessoaDAO();

if ($dao->inserir($pessoa)) {
    echo "Pessoa cadastrada com sucesso!";
} else {
    echo "Erro ao cadastrar pessoa!";
}