<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_fungsional3 extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_fungsional3', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_fungsional3");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_fungsional3");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_fungsional3() {
        $query  = $this->db->query("select * from table_fungsional3");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_fungsional3', $data, array('fungsional3_id'=>$data['fungsional3_id']));
    }

    public function delete($id) {
        $this->db->delete('table_fungsional3', array('fungsional3_id' => $id));
    }

}
?>
