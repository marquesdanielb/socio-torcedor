<?php

require "config.php";
require "banco.php";
require "classes/RepositorioTorcedores.php";

$repositorio_torcedores = new RepositorioTorcedores($pdo);
$repositorio_torcedores->remover_torcedor($_GET['id']);
header('Location: torcedores.php');
die();