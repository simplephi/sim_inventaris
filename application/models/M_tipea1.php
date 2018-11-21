<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tipea1 extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_tipea1', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_tipea1");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_tipea1");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

    public function tampil_data_tipea1() {
        $query  = $this->db->query("select * from table_tipea1");
        return $query->result();
    }

    public function edit($data) {
        $this->db->update('table_tipea1', $data, array('tipea1_id'=>$data['tipea1_id']));
    }

    public function delete($id) {
        $this->db->delete('table_tipea1', array('tipea1_id' => $id));
    }

}
?>
