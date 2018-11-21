<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dermaga extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_dermaga', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_dermaga");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_dermaga");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

    public function tampil_data_dermaga() {
        $query  = $this->db->query("select * from table_dermaga");
        return $query->result();
    }

    public function edit($data) {
        $this->db->update('table_dermaga', $data, array('dermaga_id'=>$data['dermaga_id']));
    }

    public function delete($id) {
        $this->db->delete('table_dermaga', array('dermaga_id' => $id));
    }

}
?>
