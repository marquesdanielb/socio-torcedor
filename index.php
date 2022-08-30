<?php

use Torcedores\Models\RepositorioTorcedores;

require "vendor/autoload.php";
require "config.php";
require "helpers/banco.php";
require "helpers/ajudantes.php";

$repositorio_torcedores = new RepositorioTorcedores($pdo);

$rota = "torcedores";

if (array_key_exists('rota', $_GET)) {
    $rota = (string) $_GET['rota'];
}

if (is_file("controllers/{$rota}.php")) {
    require "controllers/{$rota}.php";
} else {
    echo "Rota não encontrada";
}