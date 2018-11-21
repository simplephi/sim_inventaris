<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_fungsional2 extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_fungsional2', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_fungsional2");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_fungsional2");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_fungsional2() {
        $query  = $this->db->query("select * from table_fungsional2");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_fungsional2', $data, array('fungsional2_id'=>$data['fungsional2_id']));
    }

    public function delete($id) {
        $this->db->delete('table_fungsional2', array('fungsional2_id' => $id));
    }

}
?>
