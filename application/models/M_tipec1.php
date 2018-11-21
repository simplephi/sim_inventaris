<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tipec1 extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_tipec1', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_tipec1");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_tipec1");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

    public function tampil_data_tipec1() {
        $query  = $this->db->query("select * from table_tipec1");
        return $query->result();
    }

    public function edit($data) {
        $this->db->update('table_tipec1', $data, array('tipec1_id'=>$data['tipec1_id']));
    }

    public function delete($id) {
        $this->db->delete('table_tipec1', array('tipec1_id' => $id));
    }

}
?>
