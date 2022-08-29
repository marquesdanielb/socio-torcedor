<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Black</title>
</head>
<body>
    <h1>Gerenciador de sócio torcedores</h1>
    <?php include('formulario.php'); ?>
    <?php if($exibir_tabela) : ?>
        <?php include('tabela.php'); ?>
    <?php endif; ?>
</body>
</html>