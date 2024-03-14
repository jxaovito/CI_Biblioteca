<?php defined('BASEPATH') OR exit('URL Inválido');

class Gerenciamento_pessoas extends CI_Controller {
    public function __construct() {
        parent::__construct();
    }

    public function cadastrar_pessoas(){
        $this->load->model('pessoas');
        if(mb_strlen($this->input->post('cpf')) != 11){
            echo '<script>alert("CPF inválido")</script>'; 
            die();
        } else if(mb_strlen($this->input->post('telefone_pessoa')) != 11) {
            echo '<script>alert("Telefone Inválido")</script>'; 
            die();
        } else {
            $this->pessoas->cadastro_pessoa();
            redirect('geral/mostra_lista_pessoas');
        }
    }

    public function atualiza_pessoa($cpf){
        $this->load->model('pessoas');
        $this->pessoas->atualizar_pessoa($cpf);

        redirect('geral/mostra_lista_pessoas');
    }

    public function deleta_pessoa($cpf){
        $this->load->model('pessoas');
        $this->pessoas->deletar_pessoa($cpf);

        redirect('geral/mostra_lista_pessoas');
    }
}

?>