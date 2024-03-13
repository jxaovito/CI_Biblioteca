<?php defined('BASEPATH') OR exit('URL Inválido');

class Livros extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
 
    public function get_livros(){
        $query = $this->db->select('*')
                            ->from('livros')
                            ->where('deleted', false)
                            ->get()
                            ->result_array();
        return $query;
    }

    public function get_livro_especifico($id) {
        $query = $this->db->from('livros')->where('id_livro', $id)->get()->result_array();
        return $query;
    }

    public function cadastro_livro(){
        $dados_livros = [
           'titulo_livro' => $this->input->post('titulo_livro'),
           'autor_livro' => $this->input->post('autor_livro'),
           'ano_livro' => $this->input->post('ano_livro'),
           'editora_livro' => $this->input->post('editora_livro'),
        ];

        $query = $this->db->from('livros')->insert('livros', $dados_livros);   
}

public function atualizar_livro($id){
    $dados_livros = [
       'titulo_livro' => $this->input->post('titulo_livro'),
       'autor_livro' => $this->input->post('autor_livro'),
       'editora_livro' => $this->input->post('editora_livro'),
       'ano_livro' => $this->input->post('ano_livro'),
    ];
    // var_dump($dados_livros);
    // exit;
    $this->db->set($dados_livros)->where('id_livro', $id)->update('livros');
}

public function deletar_livro($id){
    $this->db->set('deleted', true)
             ->where('id_livro', $id)
             ->update('livros');
}
}
?>