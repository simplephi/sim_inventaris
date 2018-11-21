<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_terminalpetikemas extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_terminalpetikemas', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_terminalpetikemas");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_terminalpetikemas");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_terminalpetikemas() {
        $query  = $this->db->query("select * from table_terminalpetikemas");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_terminalpetikemas', $data, array('terminalpetikemas_id'=>$data['terminalpetikemas_id']));
    }

    public function delete($id) {
        $this->db->delete('table_terminalpetikemas', array('terminalpetikemas_id' => $id));
    }

}
?>
