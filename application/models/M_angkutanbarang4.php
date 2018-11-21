<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_angkutanbarang4 extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_angkutanbarang4', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_angkutanbarang4");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_angkutanbarang4");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

    public function tampil_data_angkutanbarang4() {
        $query  = $this->db->query("select * from table_angkutanbarang4");
        return $query->result();
    }

    public function edit($data) {
        $this->db->update('table_angkutanbarang4', $data, array('angkutanbarang4_id'=>$data['angkutanbarang4_id']));
    }

    public function delete($id) {
        $this->db->delete('table_angkutanbarang4', array('angkutanbarang4_id' => $id));
    }

}
?>
