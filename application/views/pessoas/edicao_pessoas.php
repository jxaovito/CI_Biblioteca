<?php defined('BASEPATH') OR exit('URL Inválido');?>

<div class="container container_form">
    <div class="row">
        <div class="panel panel-primary form_edicao center-block">
            <h1 class="text-center titulo_form">Editar registro do cliente</h1>
            <form action="<?php echo site_url('gerenciamento_pessoas/atualiza_pessoa/'.$lista_pessoas['cpf']); ?>" method="post">
                <input type="hidden" name="id" value="<?php echo $lista_pessoas['nome_pessoa']; ?>">
                <div class="form-group">
                    <label for="nome_pessoa">Nome</label>
                    <input type="text" class="form-control" id="nome_pessoa" name="nome_pessoa" value="<?php echo $lista_pessoas['nome_pessoa']; ?>">            
                </div>
                <div class="form-group">
                    <label for="endereco_pessoa">Endereço</label>
                    <input type="text" class="form-control" id="endereco_pessoa" name="endereco_pessoa" value="<?php echo $lista_pessoas['endereco_pessoa']; ?>">            
                </div>
                <div class="form-group">
                    <label for="telefone_pessoa">Telefone</label>
                    <input type="text" class="form-control" id="telefone_pessoa" name="telefone_pessoa" value="<?php echo $lista_pessoas['telefone_pessoa']; ?>">
                </div>
                <button type="submit" class="btn btn-primary w-100 mt-3">Atualizar</button>
            </form>
            <a href="<?php echo site_url('geral/index'); ?>"><button class="btn btn-danger w-100 mt-3">Voltar</button></a>
        </div>  
    </div>
</div>