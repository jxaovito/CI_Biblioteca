<?php defined('BASEPATH') OR exit('URL Inválido');?>

<div class="container container_form">
    <div class="row">
        <div class="panel panel-primary form_edicao center-block">
            <h1 class="text-center titulo_form">Editar registro do livro</h1>
            <form action="<?php echo site_url('gerenciamento_livros/atualiza_livro/'.$lista_livros['id_livro']); ?>" method="post">
                <input type="hidden" name="id" value="<?php echo $lista_livros['titulo_livro']; ?>">
                <div class="form-group">
                    <label for="titulo_livro">Título do Livro</label>
                    <input type="text" class="form-control" id="titulo_livro" name="titulo_livro" value="<?php echo $lista_livros['titulo_livro']; ?>">
                </div>
                <div class="form-group">
                    <label for="autor_livro">Autor do Livro</label>
                    <input type="text" class="form-control" id="autor_livro" name="autor_livro" value="<?php echo $lista_livros['autor_livro']; ?>">            
                </div>
                <div class="form-group">
                    <label for="editora_livro">Editora do Livro</label>
                    <input type="text" class="form-control" id="editora_livro" name="editora_livro" value="<?php echo $lista_livros['editora_livro']; ?>">
                </div>
                <div class="form-group">
                    <label for="ano_livro">Ano de publicação</label>
                    <input type="text" class="form-control" id="ano_livro" name="ano_livro" value="<?php echo $lista_livros['ano_livro']; ?>">
                </div>
                <button type="submit" class="btn btn-primary w-100 mt-3">Atualizar</button>
            </form>
            <a href="<?php echo site_url('geral/index'); ?>"><button class="btn btn-danger w-100 mt-3">Voltar</button></a>
</div>
</div>
</div>