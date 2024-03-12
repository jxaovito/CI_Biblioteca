<?php defined('BASEPATH') OR exit('URL Inválido');

class Pessoas extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function get_pessoas() {
        $query = $this->db->get('pessoas');
        return $query->result();
    }
    
    // public function get_pessoa($id) {
    //     $query = $this->db->get_where('pessoas', array('id' => $id));
    //     return $query->row();
    // }
    
    // public function insert_pessoa($data) {
    //     $this->db->insert('pessoas', $data);
    // }
    
    // public function update_pessoa($id, $data) {
    //     $this->db->where('id', $id);
    //     $this->db->update('pessoas', $data);
    // }
    
    // public function delete_pessoa($id) {
    //     $this->db->where('id', $id);
    //     $this->db->delete('pessoas');
    // }
}

?>