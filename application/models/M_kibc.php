<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kibc extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_kibc', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_kibc");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_kibc");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_kibc() {
        $query  = $this->db->query("select * from table_kibc");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_kibc', $data, array('kibc_id'=>$data['kibc_id']));
    }

    public function delete($id) {
        $this->db->delete('table_kibc', array('kibc_id' => $id));
    }

}
?>
