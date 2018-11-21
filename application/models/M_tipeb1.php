<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tipeb1 extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_tipeb1', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_tipeb1");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_tipeb1");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

    public function tampil_data_tipeb1() {
        $query  = $this->db->query("select * from table_tipeb1");
        return $query->result();
    }

    public function edit($data) {
        $this->db->update('table_tipeb1', $data, array('tipeb1_id'=>$data['tipeb1_id']));
    }

    public function delete($id) {
        $this->db->delete('table_tipeb1', array('tipeb1_id' => $id));
    }

}
?>
