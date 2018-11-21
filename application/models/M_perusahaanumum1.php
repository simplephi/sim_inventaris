<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_perusahaanumum1 extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_perusahaanumum1', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_perusahaanumum1");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_perusahaanumum1");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

    public function tampil_data_perusahaanumum1() {
        $query  = $this->db->query("select * from table_perusahaanumum1");
        return $query->result();
    }

    public function edit($data) {
        $this->db->update('table_perusahaanumum1', $data, array('perusahaanumum1_id'=>$data['perusahaanumum1_id']));
    }

    public function delete($id) {
        $this->db->delete('table_perusahaanumum1', array('perusahaanumum1_id' => $id));
    }

}
?>
