<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_dermaga4 extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_dermaga4', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_dermaga4");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_dermaga4");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

    public function tampil_data_dermaga4() {
        $query  = $this->db->query("select * from table_dermaga4");
        return $query->result();
    }

    public function edit($data) {
        $this->db->update('table_dermaga4', $data, array('dermaga4_id'=>$data['dermaga4_id']));
    }

    public function delete($id) {
        $this->db->delete('table_dermaga4', array('dermaga4_id' => $id));
    }

}
?>
