<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_terminal2 extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_terminal2', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_terminal2");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_terminal2");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

    public function tampil_data_terminal2() {
        $query  = $this->db->query("select * from table_terminal2");
        return $query->result();
    }

    public function edit($data) {
        $this->db->update('table_terminal2', $data, array('terminal2_id'=>$data['terminal2_id']));
    }

    public function delete($id) {
        $this->db->delete('table_terminal2', array('terminal2_id' => $id));
    }

}
?>
