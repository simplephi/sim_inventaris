<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_angkutanbarang2 extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_angkutanbarang2', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_angkutanbarang2");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_angkutanbarang2");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

    public function tampil_data_angkutanbarang2() {
        $query  = $this->db->query("select * from table_angkutanbarang2");
        return $query->result();
    }

    public function edit($data) {
        $this->db->update('table_angkutanbarang2', $data, array('angkutanbarang2_id'=>$data['angkutanbarang2_id']));
    }

    public function delete($id) {
        $this->db->delete('table_angkutanbarang2', array('angkutanbarang2_id' => $id));
    }

}
?>
