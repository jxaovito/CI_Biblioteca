<?php defined('BASEPATH') OR exit('URL Inválido');?>
<div class="text-center">
    <img src="<?php echo base_url('assets/img/logo1.png'); ?>" class="logo">
</div>
<div class="botoes_inicial text-center">
    <p class="titulo">Bem vindo(a) a biblioteca on-line! </p>
    <p class="subtitulo">Qual o seu desejo?</p>
    <a href="<?php echo site_url('geral/mostra_lista_livros'); ?>"><button class="btn btn-primary w-30">Consultar catálogo da
            biblioteca</button></a><br>
    <a href="<?php echo site_url('geral/mostra_lista_pessoas'); ?>"> <button class="btn btn-primary mt-3 w-30">Consultar
            clientes</button></a><br>
    <a href="<?php echo site_url('geral/mostra_lista_emprestimo'); ?>"> <button
            class="btn btn-primary mt-3 w-30">Consultar empréstimos
        </button></a>
</div>