<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tlaut extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_tlaut', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_tlaut");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_tlaut");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

    public function tampil_data_tlaut() {
        $query  = $this->db->query("select * from table_tlaut");
        return $query->result();
    }

    public function edit($data) {
        $this->db->update('table_tlaut', $data, array('tlaut_id'=>$data['tlaut_id']));
    }

    public function delete($id) {
        $this->db->delete('table_tlaut', array('tlaut_id' => $id));
    }

}
?>
