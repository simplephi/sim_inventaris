<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_login extends CI_Model{

    function __construct() {
        parent::__construct();
        $this->load->database();
    }

    public function login($data) {
        $this->db->where('user_name', $data['user_name']);
        $this->db->where('user_password', $data['user_password']);
        return $this->db->get('table_user')->row();
    }

    function __destruct() {
        $this->db->close();
    }
}
?>
