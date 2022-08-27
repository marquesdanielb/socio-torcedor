<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Black</title>
</head>
<body>
    <h1>Gerenciador de sócio torcedores</h1>
    <form>
        <input type="hidden" name="id" value="<?php echo $torcedor['id']; ?>" />
        <fieldset>
            <legend>Novo Torcedor</legend>
            <label>
                Nome:
                <input type="text" name="nome" value="<?php echo $torcedor['nome']; ?>" placeholder="João da Silva"/>
            </label>
            <label>
                Documento:
                <input type="text" name="documento" value="<?php echo $torcedor['documento']; ?>" placeholder="xxx.xxx.xxx-xx"/>
            </label>
            <label>
                Código Postal:
                <input type="text" name="cep" value="<?php echo $torcedor['cep']; ?>" placeholder="xxxxx-xxx"/>
            </label>
            <label>
                Endereço:
                <input type="text" name="endereco" value="<?php echo $torcedor['endereco']; ?>" placeholder="Rua joão carvalho, 222"/>
            </label>
            <label>
                Bairro:
                <input type="text" name="bairro" value="<?php echo $torcedor['bairro']; ?>" placeholder="Santo Cristo"/>
            </label>
            <label>
                Cidade:
                <input type="text" name="cidade" value="<?php echo $torcedor['cidade']; ?>" placeholder="Itanhaem"/>
            </label>
            <label>
                Estado:
                <input type="text" name="uf" value="<?php echo $torcedor['estado']; ?>" placeholder="RJ"/>
            </label>
            <label>
                Telefone:
                <input type="text" name="telefone" value="<?php echo $torcedor['telefone']; ?>" placeholder="(xx) xxxxx-xxxx"/>
            </label>
            <label>
                Email:
                <input type="text" name="Email" value="<?php echo $torcedor['email']; ?>" placeholder="mail@mail.com"/>
            </label>
        </fieldset>
        <label>
            Membro ativo:
            <input type="checkbox" name="ativo" value="<?php echo $torcedor['ativo']; ?>" value="1"/>
        </label>
        <input type="submit" value="Cadastrar">
    </form>
    <table>
        <tr>
            <th>Nome</th>
            <th>Documento</th>
            <th>Código Postal</th>
            <th>Endereço</th>
            <th>Bairro</th>
            <th>Cidade</th>
            <th>Estado</th>
            <th>Telefone</th>
            <th>Email</th>
            <th>Membro Ativo</th>
            <th>Opções</th>
        </tr>
        <?php foreach ($lista_torcedores as $torcedor) : ?>
            <tr>
                <td><?php echo $torcedor['nome']; ?></td>
                <td><?php echo $torcedor['documento']; ?></td>
                <td><?php echo $torcedor['cep']; ?></td>
                <td><?php echo $torcedor['endereco']; ?></td>
                <td><?php echo $torcedor['bairro']; ?></td>
                <td><?php echo $torcedor['cidade']; ?></td>
                <td><?php echo $torcedor['uf']; ?></td>
                <td><?php echo $torcedor['telefone']; ?></td>
                <td><?php echo $torcedor['email']; ?></td>
                <td><?php echo $torcedor['ativo']; ?></td>
                <td>
                    <a href="editar.php?id=<?php echo $torcedor['id']; ?>"/> 
                        Editar
                    </a>
                </td>
                <td>
                    <a href="remover.php?id=<?php echo $torcedor['id']; ?>"/> 
                        Remover
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>