<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kibb extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_kibb', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_kibb");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_kibb");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_kibb() {
        $query  = $this->db->query("select * from table_kibb");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_kibb', $data, array('kibb_id'=>$data['kibb_id']));
    }

    public function delete($id) {
        $this->db->delete('table_kibb', array('kibb_id' => $id));
    }

}
?>
