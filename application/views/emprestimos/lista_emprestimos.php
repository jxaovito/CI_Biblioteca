<?php defined('BASEPATH') OR exit('URL Inválido');?>

<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Clientes cadastrados</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>CPF do cliente</th>
                        <th>Nome</th>
                        <th>Telefone</th>
                        <th>Título do livro</th>
                        <th>Código do livro</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  foreach ($lista_emprestimos as $emprestimo) { ?>
                        <tr>
                        <td><?php echo $emprestimo['cpf'] ?></td>

                            <td><?php echo $emprestimo['id_livro']; ?></td>
                            <td><?php  echo $emprestimo['data_emprestimo']; ?></td>
                            <td><?php  echo $emprestimo['data_devolucao']; ?></td>
                            <td><?php echo $emprestimo['id_emprestimo']; ?></td>
                            <td><a href="<?php echo site_url('geral/mostra_edicao_pessoas/'.$emprestimo['cpf']) ?>"
                                class="mr-3"><i class="fa fa-pencil"></i></a>
                                <a href="<?php echo site_url('geral/deleta_pessoa/'.$emprestimo['cpf']) ?>"
                                class="mr-3"><i class="fa fa-trash"></i></a>
                        </td>
                        </tr>
                    <?php  } ?>
                </tbody>
            </table>
            <a href="<?php echo site_url('geral/index'); ?>"><button class="btn btn-danger">Voltar</button></a>

            <a href="<?php echo site_url('geral/mostra_cadastro_emprestimo'); ?>"><button class="btn btn-primary">Cadastrar novo empréstimo</button></a>

        </div>
    </div></div>
