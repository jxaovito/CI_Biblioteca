<?php defined('BASEPATH') OR exit('URL Inválido');

class Pessoas extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function get_pessoas() {
        $query = $this->db->select('*')
                          ->from('pessoas')
                          ->where('deleted', false)
                          ->get()
                          ->result_array();
        return $query;
    }
    
    public function get_pessoa_especifica($cpf) {
        $query = $this->db->from('pessoas')->where('cpf', $cpf)->get()->result_array();
        return $query;
    }
    
    public function cadastro_pessoa(){
        $dados_pessoas = [
           'cpf' => $this->input->post('cpf'),
           'nome_pessoa' => $this->input->post('nome_pessoa'),
           'data_nascimento' => $this->input->post('data_nascimento'),
           'endereco_pessoa' => $this->input->post('endereco_pessoa'),
           'telefone_pessoa' => $this->input->post('telefone_pessoa'),
        ];

        $query = $this->db->from('pessoas')->insert('pessoas', $dados_pessoas);   
}

    public function atualizar_pessoa($cpf){
        $dados_pessoas = [
           'nome_pessoa' => $this->input->post('nome_pessoa'),
           'endereco_pessoa' => $this->input->post('endereco_pessoa'),
           'telefone_pessoa' => $this->input->post('telefone_pessoa'),
        ];

        $this->db->set($dados_pessoas)->where('cpf', $cpf)->update('pessoas');
    }

    public function deletar_pessoa($cpf){
        $this->db->set('deleted', true)
                 ->where('cpf', $cpf)
                 ->update('pessoas');
    }
}

?>