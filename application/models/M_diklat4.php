<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_diklat4 extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_diklat4', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_diklat4");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_diklat4");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_diklat4() {
        $query  = $this->db->query("select * from table_diklat4");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_diklat4', $data, array('diklat4_id'=>$data['diklat4_id']));
    }

    public function delete($id) {
        $this->db->delete('table_diklat4', array('diklat4_id' => $id));
    }

}
?>
