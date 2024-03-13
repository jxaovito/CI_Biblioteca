<?php defined('BASEPATH') OR exit('URL Inválido');

class Emprestimos extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
 
    public function get_emprestimos(){
        $query = $this->db->select('emprestimos.*, pessoas.cpf, livros.id_livro')
        ->from('emprestimos')
        ->join('pessoas', 'emprestimos.cpf = pessoas.cpf', 'left')
        ->join('livros', 'emprestimos.id_livro = livros.id_livro', 'left')
        ->get()->result_array();
        return $query;
    }

    // public function get_emprestimo_especifico($id) {
    //     $query = $this->db->from('livros')->where('id_livro', $id)->get()->result_array();
    //     return $query;
    // }
    

}
?>