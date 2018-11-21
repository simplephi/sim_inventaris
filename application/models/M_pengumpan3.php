<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengumpan3 extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_pengumpan3', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_pengumpan3");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_pengumpan3");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_pengumpan3() {
        $query  = $this->db->query("select * from table_pengumpan3");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_pengumpan3', $data, array('pengumpan3_id'=>$data['pengumpan3_id']));
    }

    public function delete($id) {
        $this->db->delete('table_pengumpan3', array('pengumpan3_id' => $id));
    }

}
?>
