<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_perusahaanasdp1 extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_perusahaanasdp1', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_perusahaanasdp1");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_perusahaanasdp1");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

    public function tampil_data_perusahaanasdp1() {
        $query  = $this->db->query("select * from table_perusahaanasdp1");
        return $query->result();
    }

    public function edit($data) {
        $this->db->update('table_perusahaanasdp1', $data, array('perusahaanasdp1_id'=>$data['perusahaanasdp1_id']));
    }

    public function delete($id) {
        $this->db->delete('table_perusahaanasdp1', array('perusahaanasdp1_id' => $id));
    }

}
?>
