<form method="POST">
        <input type="hidden" name="id" value="" />
        <fieldset>
            <legend>Novo Torcedor</legend>
            <label>
                Nome:
                <input type="text" name="nome" value="" placeholder="João da Silva"/>
            </label>
            <label>
                Documento:
                <input type="text" name="documento" value="" placeholder="xxx.xxx.xxx-xx"/>
            </label>
            <label>
                Código Postal:
                <input type="text" name="cep" value="<?php echo $torcedor->getCep(); ?>" placeholder="xxxxx-xxx"/>
            </label>
            <label>
                Endereço:
                <input type="text" name="endereco" value="<?php echo $torcedor->getEndereco(); ?>" placeholder="Rua joão carvalho, 222"/>
            </label>
            <label>
                Bairro:
                <input type="text" name="bairro" value="<?php echo $torcedor->getBairro(); ?>" placeholder="Santo Cristo"/>
            </label>
            <label>
                Cidade:
                <input type="text" name="cidade" value="<?php echo $torcedor->getCidade(); ?>" placeholder="Itanhaem"/>
            </label>
            <label>
                Estado:
                <input type="text" name="uf" value="<?php $torcedor->getUf(); ?>" placeholder="RJ"/>
            </label>
            <label>
                Telefone:
                <input type="text" name="telefone" value="<?php echo $torcedor->getTelefone(); ?>" placeholder="(xx) xxxxx-xxxx"/>
            </label>
            <label>
                Email:
                <input type="text" name="email" value="<?php echo $torcedor->getEmail(); ?>" placeholder="mail@mail.com"/>
            </label>
        </fieldset>
        <label>
            Membro ativo:
            <input type="checkbox" name="ativo" value="<?php echo traduz_ativo_para_banco($torcedor->getAtivo()); ?>" value="1"/>
        </label>
        <input type="submit" value="Cadastrar">
    </form>