<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_keluar extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_keluar', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_keluar");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_keluar");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_keluar() {
        $query  = $this->db->query("select * from table_keluar");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_keluar', $data, array('keluar_id'=>$data['keluar_id']));
    }

    public function delete($id) {
        $this->db->delete('table_keluar', array('keluar_id' => $id));
    }

}
?>
