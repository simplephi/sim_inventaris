<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_petikemas1 extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_petikemas1', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_petikemas1");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_petikemas1");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_petikemas1() {
        $query  = $this->db->query("select * from table_petikemas1");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_petikemas1', $data, array('petikemas1_id'=>$data['petikemas1_id']));
    }

    public function delete($id) {
        $this->db->delete('table_petikemas1', array('petikemas1_id' => $id));
    }

}
?>
