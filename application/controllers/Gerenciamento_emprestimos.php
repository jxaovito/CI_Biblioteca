<?php defined('BASEPATH') OR exit('URL Inválido');

    class Gerenciamento_emprestimos extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('Emprestimos');
        }
        
        public function cadastrar_emprestimo(){
            $this->load->model('emprestimos');
            $this->emprestimos->cadastro_emprestimo();
            redirect('geral/mostra_lista_livros');

        }
    }
    
    ?>