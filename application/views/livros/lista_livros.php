<?php defined('BASEPATH') OR exit('URL Inválido');?>


<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Livros cadastrados</h1>
            <table class="table table-striped">
              
        <thead>
            <tr>
                <th>Código</th>
                <th>Título</th>
                <th>Autor do livro</th>
                <th>Ano de lançamento</th>
                <th>Editora</th>
            </tr>
        </thead>
        <tbody>
            <?php  foreach ($lista_livros as $livro) { ?>
            <tr>
                <td><?php echo $livro['id_livro'] ?></td>
                <td><?php echo $livro['titulo_livro']?></td>
                <td><?php echo $livro['autor_livro']; ?></td>
                <td><?php echo $livro['ano_livro']; ?></td>
                <td><?php echo $livro['editora_livro']; ?></td>
                <td><a href="<?php echo site_url('geral/mostra_edicao_livros/'.$livro['id_livro']) ?>" class="mr-3"><i
                            class="fa fa-pencil"></i></a>
                    <a href="<?php echo site_url('gerenciamento_livros/deleta_livro/'.$livro['id_livro']) ?>"
                        class="mr-3"><i class="fa fa-trash"></i></a>
                </td>
            </tr>
            <?php  } ?>
        </tbody>
        </table>
        <a href="<?php echo site_url('geral/index'); ?>"><button class="btn btn-danger">Voltar</button></a>
        <a href="<?php echo site_url('geral/mostra_cadastro_livros'); ?>"><button class="btn btn-primary">Cadastrar um
                novo livro</button></a>

    </div>
</div>
</div>