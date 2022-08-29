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
                <td><?php echo $torcedor->getNome(); ?></td>
                <td><?php echo $torcedor->getDocumento(); ?></td>
                <td><?php echo $torcedor->getCep(); ?></td>
                <td><?php echo $torcedor->getEndereco(); ?></td>
                <td><?php echo $torcedor->getBairro(); ?></td>
                <td><?php echo $torcedor->getCidade(); ?></td>
                <td><?php echo $torcedor->getUf(); ?></td>
                <td><?php echo $torcedor->getTelefone(); ?></td>
                <td><?php echo $torcedor->getEmail(); ?></td>
                <td><?php echo traduz_ativo_para_exibir($torcedor->getAtivo()); ?></td>
                <td>
                    <a href="editar.php?id=<?php echo $torcedor->getId(); ?>"/> 
                        Editar
                    </a>
                </td>
                <td>
                    <a href="remover.php?id=<?php echo $torcedor->getId(); ?>"/> 
                        Remover
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>