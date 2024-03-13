<?php defined('BASEPATH') OR exit('URL Inválido');?>

<div class="container container_form">
    <div class="row">
        <div class="panel panel-primary form_edicao center-block">
            <h1 class="text-center titulo_form">Registrar um empréstimo</h1>
            <form action="<?php echo site_url('gerenciamento_livros/cadastra_emprestimo'); ?>" method="post">
                <input type="hidden" name="id" value="">
                <div class="form-group">
                    <label for="">Título do Livro</label>
                    <select class="form-control" id="" name="" value=""><?php foreach ($lista_livros as $livro) { ?>
                        <option value="<?php echo $livro['id_livro'] ?>"><?php echo $livro['titulo_livro'] ?></option>    
                   <?php } ?></select>
                </div>
                <div class="form-group">
                    <label for="autor_livro">Nome do cliente</label>
                    <select class="form-control" id="" name="" value=""><?php foreach ($lista_pessoas as $pessoa) { ?>
                        <option value="<?php echo $pessoa['cpf'] ?>"><?php echo $pessoa['nome_pessoa'] ?></option>    
                   <?php } ?></select>
                </div>
                <div class="form-group">
                    <label for="editora_livro">Data do empréstimo</label>
                    <input type="date" class="form-control" id="" name="" value="">
                </div>
                <div class="form-group">
                    <label for="ano_livro">Data de entrega</label>
                    <input type="date" class="form-control" id="" name="" value="">
                </div>
                <button type="submit" class="btn btn-primary w-100 mt-3">Registrar</button>
            </form>
            <a href="<?php echo site_url('geral/mostra_lista_emprestimo'); ?>"><button class="btn btn-danger w-100 mt-3">Voltar</button></a>
        </div>
    </div>
</div>