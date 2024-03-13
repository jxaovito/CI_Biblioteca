<?php defined('BASEPATH') OR exit('URL Inválido');?>

<div class="container container_form">
    <div class="row">
        <div class="panel panel-primary form_edicao center-block">
            <h1 class="text-center titulo_form">Registrar um empréstimo</h1>
            <form action="<?php echo site_url('gerenciamento_emprestimos/cadastrar_emprestimo'); ?>" method="post">
                <input type="hidden" name="id">
                <div class="form-group">
                    <label for="">Título do Livro</label>
                    <select class="form-control" id="titulo_livro" name="titulo_livro"><?php foreach ($lista_livros as $livro) { ?>
                        <option value="<?php echo $livro['id_livro'] ?>"><?php echo $livro['titulo_livro'] ?></option>    
                   <?php } ?></select>
                </div>
                <div class="form-group">
                    <label for="nome_pessoa">Nome do cliente</label>
                    <select class="form-control" id="nome_pessoa" name="nome_pessoa"><?php foreach ($lista_pessoas as $pessoa) { ?>
                        <option value="<?php echo $pessoa['cpf'] ?>"><?php echo $pessoa['nome_pessoa'] ?></option>    
                   <?php } ?></select>
                </div>
                <div class="form-group">
                    <label for="data_emprestimo">Data do empréstimo</label>
                    <input type="date" class="form-control" id="data_emprestimo" name="data_emprestimo">
                </div>
                <div class="form-group">
                    <label for="data_devolucao">Data de devolução</label>
                    <input type="date" class="form-control" id="data_devolucao" name="data_devolucao">
                </div>
                <button type="submit" class="btn btn-primary w-100 mt-3">Registrar</button>
            </form>
            <a href="<?php echo site_url('geral/mostra_lista_emprestimo'); ?>"><button class="btn btn-danger w-100 mt-3">Voltar</button></a>
        </div>
    </div>
</div>