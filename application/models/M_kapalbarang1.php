<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kapalbarang1 extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_kapalbarang1', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_kapalbarang1");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_kapalbarang1");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_kapalbarang1() {
        $query  = $this->db->query("select * from table_kapalbarang1");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_kapalbarang1', $data, array('kapalbarang1_id'=>$data['kapalbarang1_id']));
    }

    public function delete($id) {
        $this->db->delete('table_kapalbarang1', array('kapalbarang1_id' => $id));
    }

}
?>
