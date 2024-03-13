<?php defined('BASEPATH') OR exit('URL Inválido');?>
    <head>
        <title>Cadastro de Clientes</title>
    </head>
    <body>
        <div class="container container-form">
            <div class="row">
            <div class="panel panel-primary form_edicao center-block">

            <h1 class="text-center titulo_form">Cadastro de clientes</h1>
            <form action="<?php echo site_url('gerenciamento_pessoas/cadastrar_pessoas');?>" method="post" class="form_livros">
                <div class="form-group">
                        <label for="cpf">CPF</label>
                        <input type="text" class="form-control" id="cpf" name="cpf" required>
                    </div>
                    <div class="form-group">
                        <label for="nome_pessoa">Nome</label>
                        <input type="text" class="form-control" id="nome_pessoa" name="nome_pessoa" required>
                    </div>
                    <div class="form-group">
                        <label for="data_nascimento">Data de nascimento</label>
                        <input type="date" name="data_nascimento" id="data_nascimento" class="form-control" required/>
                    </div>
                    <div class="form-group">
                        <label for="endereco_pessoa">Endereço</label><br>
                        <input type="text" class="form-control" id="endereco_pessoa" name="endereco_pessoa" required>
                    </div>
                    <div class="form-group">
                        <label for="telefone_pessoa">Telefone</label><br>
                        <input type="text" class="form-control" id="telefone_pessoa" name="telefone_pessoa" required>
                    </div>
                    <button type="submit" class="btn btn-primary w-100">Cadastrar</button>
</form>
<a href="<?php echo site_url('geral/mostra_lista_pessoas'); ?>"><button class="btn btn-danger w-100 mt-3">Voltar</button></a>

</div>
</div>
</div>