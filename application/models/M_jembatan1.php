<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jembatan1 extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_jembatan1', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_jembatan1");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_jembatan1");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

    public function tampil_data_jembatan1() {
        $query  = $this->db->query("select * from table_jembatan1");
        return $query->result();
    }

    public function edit($data) {
        $this->db->update('table_jembatan1', $data, array('jembatan1_id'=>$data['jembatan1_id']));
    }

    public function delete($id) {
        $this->db->delete('table_jembatan1', array('jembatan1_id' => $id));
    }

}
?>
