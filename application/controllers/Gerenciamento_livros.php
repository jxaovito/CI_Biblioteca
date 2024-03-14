<?php defined('BASEPATH') OR exit('URL Inválido');

    class Gerenciamento_livros extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('Livros');
        }
        
        public function cadastrar_livro(){
            $this->load->model('livros');
            $this->livros->cadastro_livro();
            redirect('geral/mostra_lista_livros');

        }

        public function deleta_livro($id){
            $this->load->model('livros');
            $this->livros->deletar_livro($id);
    
            redirect('geral/mostra_lista_livros');
        }

        public function atualiza_livro($id){
            $this->load->model('livros');
            $this->livros->atualizar_livro($id);
            
            redirect('geral/mostra_lista_livros');
        }

        public function filtrar_por_(){
        }
    }
    
    ?>