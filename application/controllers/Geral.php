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
        $this->load->view('pessoas/lista_pessoas');
        $this->load->view('resources/footer');
        $this->load->model('pessoas');
        $lista = $this->pessoas->get_pessoas();

        foreach ($lista as $pessoa) {
            echo $pessoa->nome_pessoa;
        }
    }

    public function mostra_edicao_pessoas() {
        $this->load->view('resources/header');
        $this->load->view('pessoas/edicao_pessoas');
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
        $this->load->view('livros/lista_livros');
        $this->load->view('resources/footer');
        $this->load->model('livros');

        $lista = $this->livros->get_livros();

        foreach ($lista as $livro) {
            echo $livro->titulo_livro;
        }
    }

    public function mostra_edicao_livros() {
        $this->load->view('resources/header');
        $this->load->view('livros/edicao_livros');
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
}
?>

