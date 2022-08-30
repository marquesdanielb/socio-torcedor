<form method="POST" class="row g-3">
    <div class="col-md-4">
        <label class="form-label">Nome</label>
        <input name="nome" type="text" class="form-control" value="<?php echo $torcedor->getNome(); ?>">
    </div>
    <div class="col-md-3">
        <label class="form-label">Documento</label>
        <input name="documento" type="text" class="form-control" value="<?php echo $torcedor->getDocumento(); ?>">
    </div>
    <div class="col-2">
        <label class="form-label">Código Postal</label>
        <input name="cep" type="text" class="form-control" id="inputAddress" value="<?php echo $torcedor->getCep(); ?>" placeholder="xxxxx-xxx">
    </div>
    <div class="col-4">
        <label class="form-label">Endereço</label>
        <input name="endereco" type="text" class="form-control" value="<?php echo $torcedor->getEndereco(); ?>" placeholder="Rua Oliveira...">
    </div>
    <div class="col-md-2">
        <label class="form-label">Bairro</label>
        <input name="bairro" type="text" class="form-control" value="<?php echo $torcedor->getBairro(); ?>">
    </div>
    <div class="col-md-2">
        <label class="form-label">Cidade</label>
        <input name="cidade" type="text" class="form-control" value="<?php echo $torcedor->getCidade(); ?>">
    </div>
    <div class="col-1">
        <label class="form-label">Estado</label>
        <select name="uf" id="inputState" class="form-select" value="<?php echo $torcedor->getUf(); ?>">
            <option value="AC">Acre</option>
            <option value="AL">Alagoas</option>
            <option value="AP">Amapá</option>
            <option value="AM">Amazonas</option>
            <option value="BA">Bahia</option>
            <option value="CE">Ceará</option>
            <option value="DF">Distrito Federal</option>
            <option value="ES">Espírito Santo</option>
            <option value="GO">Goiás</option>
            <option value="MA">Maranhão</option>
            <option value="MT">Mato Grosso</option>
            <option value="MS">Mato Grosso do Sul</option>
            <option value="MG">Minas Gerais</option>
            <option value="PA">Pará</option>
            <option value="PB">Paraíba</option>
            <option value="PR">Paraná</option>
            <option value="PE">Pernambuco</option>
            <option value="PI">Piauí</option>
            <option value="RJ">Rio de Janeiro</option>
            <option value="RN">Rio Grande do Norte</option>
            <option value="RS">Rio Grande do Sul</option>
            <option value="RO">Rondônia</option>
            <option value="RR">Roraima</option>
            <option value="SC">Santa Catarina</option>
            <option value="SP">São Paulo</option>
            <option value="SE">Sergipe</option>
            <option value="TO">Tocantins</option>
            <option value="EX">Estrangeiro</option>
        </select>
    </div>
    <div class="col-md-2">
        <label class="form-label">Telefone</label>
        <input name="telefone" type="text" class="form-control" id="inputZip" value="<?php echo $torcedor->getTelefone(); ?>">
    </div>
    <div class="col-md-2">
        <label class="form-label">Email</label>
        <input name="email" type="text" class="form-control" id="inputZip" value="<?php echo $torcedor->getEmail(); ?>">
    </div>
    <div class="col-12">
    <div class="form-check">
        <input name="ativo" class="form-check-input" type="checkbox" id="gridCheck" value="<?php echo $torcedor->getAtivo(); ?>">
        <label class="form-check-label" for="gridCheck">
            Membro Ativo
        </label>
        </div>
    </div>
        <div class="col-12">
        <button type="submit" class="btn btn-primary">Cadastrar</button>
    </div>
    <br>
</form>
