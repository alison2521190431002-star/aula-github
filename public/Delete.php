<?php

require "../vendor/autoload.php";

use App\DAO\PessoaDAO;

if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
    header("Location: Pessoas-list.php");
    exit;
}

$id = $_POST['id'] ?? null;

if (!$id) {
    header("Location: Pessoas-list.php");
    exit;
}

try {

    $dao = new PessoaDAO();

    $dao->excluir($id);

    header("Location: Pessoas-list.php");
    exit;

} catch (Exception $e) {

    echo "Erro ao excluir pessoa: " . $e->getMessage();

}