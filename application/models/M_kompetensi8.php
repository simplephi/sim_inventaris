<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kompetensi8 extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_kompetensi8', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_kompetensi8");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_kompetensi8");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_kompetensi8() {
        $query  = $this->db->query("select * from table_kompetensi8");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_kompetensi8', $data, array('kompetensi8_id'=>$data['kompetensi8_id']));
    }

    public function delete($id) {
        $this->db->delete('table_kompetensi8', array('kompetensi8_id' => $id));
    }

}
?>
