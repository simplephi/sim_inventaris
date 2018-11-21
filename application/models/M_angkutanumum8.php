<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_angkutanumum8 extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_angkutanumum8', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_angkutanumum8");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_angkutanumum8");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

    public function tampil_data_angkutanumum8() {
        $query  = $this->db->query("select * from table_angkutanumum8");
        return $query->result();
    }

    public function edit($data) {
        $this->db->update('table_angkutanumum8', $data, array('angkutanumum8_id'=>$data['angkutanumum8_id']));
    }

    public function delete($id) {
        $this->db->delete('table_angkutanumum8', array('angkutanumum8_id' => $id));
    }

}
?>
