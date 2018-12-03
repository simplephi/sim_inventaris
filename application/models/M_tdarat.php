<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_tdarat extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_tdarat', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_tdarat");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_tdarat");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

    public function tampil_data_tdarat() {
        $query  = $this->db->query("select * from table_tdarat");
        return $query->result();
    }

    public function edit($data) {
        $this->db->update('table_tdarat', $data, array('tdarat_id'=>$data['tdarat_id']));
    }

    public function delete($id) {
        $this->db->delete('table_tdarat', array('tdarat_id' => $id));
    }

}
?>
