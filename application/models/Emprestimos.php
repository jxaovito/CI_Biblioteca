<?php defined('BASEPATH') OR exit('URL Inválido');

class Emprestimos extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
 
    public function cadastro_emprestimo(){
        $dados_emprestimos = [
            'data_emprestimo' => $this->input->post('data_emprestimo'),
            'data_devolucao' => $this->input->post('data_devolucao'),
            'cpf' => $this->input->post('cpf'),
            'id_livro' => $this->input->post('id_livro'),
        ];

        $query = $this->db->from('emprestimos')
                      ->insert('emprestimos', $dados_emprestimos);

        $query_2 = $this->db->from('livros')
                      ->set('emprestado', true)
                      ->where('id_livro', $this->input->post('id_livro'))
                      ->update('livros');
    }

    public function get_emprestimo(){
        $query = $this->db->select('emprestimos.*, pessoas.cpf, pessoas.nome_pessoa, pessoas.telefone_pessoa, livros.titulo_livro, livros.id_livro')
        ->from('emprestimos')
        ->join('pessoas', 'emprestimos.cpf = pessoas.cpf', 'left')
        ->join('livros', 'emprestimos.id_livro = livros.id_livro', 'left')
        ->where('baixa', false)
        ->get()->result_array();

        return $query;
    }

    public function baixa_emprestimo($id){
        $this->db->set('baixa', true)
                 ->join('livros', 'emprestimos.id_livro = livros.id_livro', 'left')
                 ->where('id_emprestimo', $id)
                 ->update('emprestimos');

        $query = $this->db->select('id_livro')
                         ->from('emprestimos')
                         ->where('id_emprestimo', $id)
                         ->get();
        $id_livro = $query->row()->id_livro;

        $this->db->set('emprestado', false)
                 ->where('id_livro', $id_livro)
                 ->update('livros');
    }

    public function verifica_atraso(){
        $query = $this->db->set('atrasado', true)
                          ->where('data_devolucao <', date('Y-m-d'))
                          ->update('emprestimos');
        return $query;
    }

    public function emprestimos_atrasados(){
        $atrasados = $this->db->select('*')
                            ->from('emprestimos')
                            ->where('atrasado', true)
                            ->get()->result_array();
        return $atrasados;
    }

    public function get_data_devolucao(){
        $query = $this->db->get('emprestimos'); 
        if ($query->num_rows() > 0) {
            return $query->row()->data_devolucao; 
        }
        return null;
    }
}
?>