<?php

require "../vendor/autoload.php";

use App\DAO\PessoaDAO;

$dao = new PessoaDAO();

$id = $_GET['id'] ?? null;

if (!$id) {
    header("Location: pessoas.php");
    exit;
}

$pessoa = $dao->buscarPorId($id);

if (!$pessoa) {
    header("Location: pessoas.php");
    exit;
}

$content = '

<div class="container py-4">

    <div class="card border-0 shadow-lg rounded-4">

        <div class="card-body p-4">

            <h2 class="fw-bold mb-4">
                <i class="bi bi-pencil-fill me-2"></i>
                Editar Pessoa
            </h2>

            <form action="pessoas-update.php" method="POST">

                <input
                    type="hidden"
                    name="id"
                    value="' . htmlspecialchars($pessoa['id']) . '"
                >

                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Nome
                    </label>

                    <input
                        type="text"
                        name="nome"
                        class="form-control"
                        value="' . htmlspecialchars($pessoa['nome']) . '"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        CPF
                    </label>

                    <input
                        type="text"
                        name="cpf"
                        class="form-control"
                        value="' . htmlspecialchars($pessoa['cpf']) . '"
                        required
                    >
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Telefone
                    </label>

                    <input
                        type="text"
                        name="telefone"
                        class="form-control"
                        value="' . htmlspecialchars($pessoa['telefone'] ?? '') . '"
                    >
                </div>

                <div class="mb-3">
                    <label class="form-label fw-semibold">
                        Endereço
                    </label>

                    <input
                        type="text"
                        name="endereco"
                        class="form-control"
                        value="' . htmlspecialchars($pessoa['endereco'] ?? '') . '"
                    >
                </div>

                <div class="d-flex gap-2">

                    <button
                        type="submit"
                        class="btn btn-primary"
                    >
                        <i class="bi bi-check-lg me-1"></i>
                        Salvar Alterações
                    </button>

                    <a
                        href="pessoas.php"
                        class="btn btn-secondary"
                    >
                        <i class="bi bi-arrow-left me-1"></i>
                        Voltar
                    </a>

                </div>

            </form>

        </div>

    </div>

</div>

';

include "layout.php";
?>