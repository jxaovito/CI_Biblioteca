<?php defined('BASEPATH') OR exit('URL Inválido');?>
    <head>
        <title>Cadastro de Livros</title>
    </head>
    <body>
        <div class="container container-form">
            <div class="row">
            <div class="panel panel-primary form_edicao center-block">

            <h1 class="text-center titulo_form">Cadastro de Livros</h1>
            <form action="<?php echo site_url('gerenciamento_livros/cadastrar_livro');?>" method="post" class="form_livros">
                <div class="form-group">
                        <label for="titulo_livro">Título do Livro</label>
                        <input type="text" class="form-control" id="titulo_livro" name="titulo_livro" required>
                    </div>
                    <div class="form-group">
                        <label for="autor_livro">Autor do Livro</label>
                        <input type="text" class="form-control" id="autor_livro" name="autor_livro" required>
                    </div>
                    <div class="form-group">
                        <label for="editora_livro">Editora do Livro</label>
                        <input type="text" class="form-control" id="editora_livro" name="editora_livro" required>
                    </div>
                    <div class="form-group">
                        <label for="ano_livro">Ano do Livro</label><br>
                        <input type="number" min="0" max="2024" step="1" value="0" required name="ano_livro" id="ano_livro" class="form-control"/>
                    </div>
                    <button type="submit" class="btn btn-primary w-100  ">Cadastrar</button>
</form>
<a href="<?php echo site_url('geral/mostra_lista_livros'); ?>"><button class="btn btn-danger w-100 mt-3">Voltar</button></a>

</div>
</div>
</div>