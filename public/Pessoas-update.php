<?php

require "../vendor/autoload.php";

use App\DAO\PessoaDAO;
use App\Model\Pessoa;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: Pessoas-list.php");
    exit;
}

$id = $_POST['id'] ?? null;
$nome = $_POST['nome'] ?? '';
$cpf = $_POST['cpf'] ?? '';
$telefone = $_POST['telefone'] ?? '';
$endereco = $_POST['endereco'] ?? '';

if (!$id || !$nome || !$cpf) {
    echo "Preencha os campos obrigatórios.";
    exit;
}

try {

    $pessoa = new Pessoa();

    $pessoa->setId((int) $id);
    $pessoa->setNome($nome);
    $pessoa->setCpf($cpf);
    $pessoa->setTelefone($telefone);
    $pessoa->setEndereco($endereco);

    $dao = new PessoaDAO();

    $dao->atualizar($pessoa);

    header("Location: Pessoas-list.php");
    exit;

} catch (Exception $e) {

    echo "Erro ao atualizar pessoa: " . $e->getMessage();

}