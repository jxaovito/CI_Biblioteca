<?php defined('BASEPATH') OR exit('URL Inválido');

class Geral extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }
    public function index() {
        $this->load->view('resources/header');
        $this->load->view('pagina_inicial');
        $this->load->view('resources/footer');    
    }

    public function mostra_lista_pessoas() {
        $this->load->view('resources/header');

        $this->load->model('pessoas');
        $dados['lista_pessoas'] = $this->pessoas->get_pessoas();

        $this->load->helper('formata_cpf_helper');
        $dados = formata_cpf($dados);

        $this->load->view('pessoas/lista_pessoas', $dados);
        $this->load->view('resources/footer');

    }

    public function mostra_edicao_pessoas($cpf) {
        $this->load->view('resources/header');

        $this->load->model('pessoas');
        $dados['lista_pessoas'] = $this->pessoas->get_pessoa_especifica($cpf)[0];

        $this->load->view('pessoas/edicao_pessoas', $dados);
        $this->load->view('resources/footer');
    }

    public function mostra_cadastro_pessoas() {
        $this->load->view('resources/header');
        $this->load->view('pessoas/cadastro_pessoas');
        $this->load->view('resources/footer');
    }

    public function mostra_deleta_pessoas() {
        $this->load->view('resources/header');
        $this->load->view('pessoas/deleta_pessoas');
        $this->load->view('resources/footer');
    }


    // LIVROS =====================================================

    public function mostra_lista_livros() {
        $this->load->view('resources/header');

        $this->load->model('livros');
        $dados['lista_livros'] = $this->livros->get_livros();

        $this->load->view('livros/lista_livros', $dados);
        $this->load->view('resources/footer');
    }

    public function mostra_edicao_livros($id) {
        $this->load->view('resources/header');

        $this->load->model('livros');
        $dados['lista_livros'] = $this->livros->get_livro_especifico($id)[0];

        $this->load->view('livros/edicao_livros', $dados);
        $this->load->view('resources/footer');
    }

    public function mostra_cadastro_livros() {
        $this->load->view('resources/header');
        $this->load->view('livros/cadastro_livros');
        $this->load->view('resources/footer');
    }

    public function mostra_deleta_livros() {
        $this->load->view('resources/header');
        $this->load->view('livros/deleta_livros');
        $this->load->view('resources/footer');
    }

    // EMPRÉSTIMOS =============================================================

    
    public function mostra_cadastro_emprestimo() {
        $this->load->view('resources/header');

        $this->load->model('livros');
        $this->load->model('pessoas');

        $dados['lista_pessoas'] = $this->pessoas->get_pessoas();
        $dados['lista_livros'] = $this->livros->get_livros();

        $this->load->view('emprestimos/cadastro_emprestimo', $dados);
        $this->load->view('resources/footer');
    }

    public function mostra_lista_emprestimo() {
        $this->load->view('resources/header');

        $this->load->model('emprestimos');
        $dados['lista_emprestimos'] = $this->emprestimos->get_emprestimo();
        $this->load->helper('formata_hora_helper');
        $dados = formata_hora($dados);
        
        $this->emprestimos->verifica_atraso();
        
        $this->load->view('emprestimos/lista_emprestimos', $dados);
        $this->load->view('resources/footer');
    }
}
?>

