<?php defined('BASEPATH') OR exit('URL Inválido');

class Gerenciamento_pessoas extends CI_Model {
    public function __construct() {
        parent::__construct();
    }
    
    public function get_pessoas() {
        $query = $this->db->get('pessoas');
        return $query->result();
    }
}

?>