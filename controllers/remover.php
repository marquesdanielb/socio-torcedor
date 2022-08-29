<?php

$repositorio_torcedores->remover_torcedor($_GET['id']);
header('Location: index.php?rota=torcedores');
die();