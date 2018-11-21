<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_penumpang1 extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_penumpang1', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_penumpang1");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_penumpang1");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_penumpang1() {
        $query  = $this->db->query("select * from table_penumpang1");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_penumpang1', $data, array('penumpang1_id'=>$data['penumpang1_id']));
    }

    public function delete($id) {
        $this->db->delete('table_penumpang1', array('penumpang1_id' => $id));
    }

}
?>
