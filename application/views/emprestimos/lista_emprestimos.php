<?php defined('BASEPATH') OR exit('URL Inválido');?>
<script>
    var mostra_lista_emprestimo_url = "<?php echo site_url('geral/mostra_lista_emprestimo'); ?>";

</script>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Empréstimos em aberto</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>CPF do cliente</th>
                        <th>Nome</th>
                        <th>Título do livro</th>
                        <th>Código do livro</th>
                        <th>Data do empréstimo</th>
                        <th>Data de devolução</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  foreach ($lista_emprestimos as $emprestimo) { ?>
                        <tr class="<?php echo $emprestimo['atrasado'] ? 'atrasado' : ''; ?>">
                        <td><?php echo $emprestimo['cpf'] ?></td>
                            <td><?php echo $emprestimo['nome_pessoa']; ?></td>
                            <td><?php  echo $emprestimo['titulo_livro']; ?></td>
                            <td><?php echo $emprestimo['id_livro']; ?></td>
                            <td><?php echo $emprestimo['data_emprestimo']; ?></td>
                            <td class="<?php echo $emprestimo['atrasado'] ? 'data_devolucao_atrasado' : ''; ?>"><?php echo $emprestimo['data_devolucao']; ?></td>

                            <td>
                                <a href="<?php echo site_url('gerenciamento_emprestimos/baixa_emprestimo/'.$emprestimo['id_emprestimo']) ?>"
                                class="mr-3"><i class="fa fa-check-square"></i></a>
                        </td>
                        </tr>
                        
            <!-- <input type="hidden" id="emprestimos_atrasados" value="<?php // echo count($this->emprestimos->emprestimos_atrasados()); ?>">  -->
           
                    <?php  } ?>
                </tbody>
            </table>
            <a href="<?php echo site_url('geral/index'); ?>"><button class="btn btn-danger">Voltar</button></a>
            <a href="<?php echo site_url('geral/mostra_cadastro_emprestimo'); ?>"><button class="btn btn-primary">Cadastrar novo empréstimo</button></a>


        </div>
    </div></div>
