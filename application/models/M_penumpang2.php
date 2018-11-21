<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_penumpang2 extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_penumpang2', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_penumpang2");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_penumpang2");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_penumpang2() {
        $query  = $this->db->query("select * from table_penumpang2");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_penumpang2', $data, array('penumpang2_id'=>$data['penumpang2_id']));
    }

    public function delete($id) {
        $this->db->delete('table_penumpang2', array('penumpang2_id' => $id));
    }

}
?>
