<?php defined('BASEPATH') OR exit('URL Inválido');

    class Gerenciamento_emprestimos extends CI_Controller {
        public function __construct() {
            parent::__construct();
            $this->load->model('Emprestimos');
        }
        
        public function cadastrar_emprestimo(){
            $this->load->model('emprestimos');
            $this->emprestimos->cadastro_emprestimo();
            redirect('geral/mostra_lista_emprestimo');
        }

        public function baixa_emprestimo($id){
            $this->load->model('emprestimos');
            $this->emprestimos->baixa_emprestimo($id);
            redirect('geral/mostra_lista_emprestimo');
        }

        public function verifica_atraso(){
            $this->load->model('emprestimos');
            $this->emprestimos->verifica_atraso();
           
            redirect('geral/mostra_lista_emprestimo');
        }

        public function emprestimos_atrasados(){
            $this->load->model('emprestimos');
            $atrasados = $this->emprestimos->emprestimos_atrasados();
            
            return $atrasados;
        }

        public function retorna_data_devolucao(){
            $this->load->model('emprestimos');
            $data_devolucao = $this->emprestimos->get_data_devolucao();
            return $data_devolucao;
        } 
    }
    
    ?>