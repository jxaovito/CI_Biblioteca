<?php defined('BASEPATH') OR exit('URL Inválido');?>

<div class="container">
    <div class="row">
        <div class="col-md-12">

            <h1 class="text-center">Clientes cadastrados</h1>
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>CPF</th>
                        <th>Nome</th>
                        <th>Data de Nascimento</th>
                        <th>Endereço</th>
                        <th>Telefone</th>
                    </tr>
                </thead>
                <tbody>
                    <?php  foreach ($lista_pessoas as $pessoa) { ?>
                    <tr>
                        <td><?php echo $pessoa['cpf'] ?></td>

                        <td><?php echo $pessoa['nome_pessoa']; ?></td>
                        <td><?php  echo $pessoa['data_nascimento']; ?></td>
                        <td><?php  echo $pessoa['endereco_pessoa']; ?></td>
                        <td><?php echo $pessoa['telefone_pessoa']; ?></td>
                        <td><a href="<?php echo site_url('geral/mostra_edicao_pessoas/'.$pessoa['cpf']) ?>"
                                class="mr-3"><i class="fa fa-pencil"></i></a>
                            <a href="<?php echo site_url('gerenciamento_pessoas/deleta_pessoa/'.$pessoa['cpf']) ?>" class="mr-3"><i
                                    class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                    <?php  } ?>
                </tbody>
            </table>
            <a href="<?php echo site_url('geral/index'); ?>"><button class="btn btn-danger">Voltar</button></a>
            <a href="<?php echo site_url('geral/mostra_cadastro_pessoas'); ?>"><button class="btn btn-primary">Cadastrar um novo cliente</button></a>

        </div>
    </div>
</div>
