<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_angkutanumum1 extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_angkutanumum1', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_angkutanumum1");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_angkutanumum1");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

    public function tampil_data_angkutanumum1() {
        $query  = $this->db->query("select * from table_angkutanumum1");
        return $query->result();
    }

    public function edit($data) {
        $this->db->update('table_angkutanumum1', $data, array('angkutanumum1_id'=>$data['angkutanumum1_id']));
    }

    public function delete($id) {
        $this->db->delete('table_angkutanumum1', array('angkutanumum1_id' => $id));
    }

}
?>
