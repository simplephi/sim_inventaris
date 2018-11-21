<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_angkutanbarang1 extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_angkutanbarang1', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_angkutanbarang1");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_angkutanbarang1");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

    public function tampil_data_angkutanbarang1() {
        $query  = $this->db->query("select * from table_angkutanbarang1");
        return $query->result();
    }

    public function edit($data) {
        $this->db->update('table_angkutanbarang1', $data, array('angkutanbarang1_id'=>$data['angkutanbarang1_id']));
    }

    public function delete($id) {
        $this->db->delete('table_angkutanbarang1', array('angkutanbarang1_id' => $id));
    }

}
?>
