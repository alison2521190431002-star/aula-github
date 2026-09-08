<?php

use App\Config\Conexao;

ob_start();

require __DIR__ . '/../vendor/autoload.php';

$pdo = null;

try {

    $database = new Conexao();

    $pdo = $database->conectar();

    if ($pdo !== null) {

        echo '<div class="alert alert-success">';
        echo '<h4>Conexão realizada com sucesso!</h4>';
        echo '<p>PHP conectado ao MySQL usando PDO.</p>';
        echo '</div>';

    } else {

        echo '<div class="alert alert-danger">';
        echo '<h4>Erro na conexão!</h4>';
        echo '<p>PDO não foi conectado.</p>';
        echo '</div>';
    }

} catch (PDOException $e) {

    $pdo = null;

    echo '<div class="alert alert-danger">';
    echo '<h4>Erro na conexão!</h4>';
    echo '<p>' . $e->getMessage() . '</p>';
    echo '</div>';
}

$content = ob_get_clean();

require "layout.php";
require "footer.php";