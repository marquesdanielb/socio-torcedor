<?php

require "banco.php";

remover_torcedor($_GET['id'], $conexao);
header('Location: torcedores.php');
die();