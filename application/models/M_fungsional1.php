<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_fungsional1 extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_fungsional1', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_fungsional1");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_fungsional1");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_fungsional1() {
        $query  = $this->db->query("select * from table_fungsional1");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_fungsional1', $data, array('fungsional1_id'=>$data['fungsional1_id']));
    }

    public function delete($id) {
        $this->db->delete('table_fungsional1', array('fungsional1_id' => $id));
    }

}
?>
