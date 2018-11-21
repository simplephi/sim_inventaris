<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kapalbarang2 extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_kapalbarang2', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_kapalbarang2");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_kapalbarang2");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_kapalbarang2() {
        $query  = $this->db->query("select * from table_kapalbarang2");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_kapalbarang2', $data, array('kapalbarang2_id'=>$data['kapalbarang2_id']));
    }

    public function delete($id) {
        $this->db->delete('table_kapalbarang2', array('kapalbarang2_id' => $id));
    }

}
?>
