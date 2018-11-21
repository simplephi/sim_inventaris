<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kompetensi9 extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_kompetensi9', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_kompetensi9");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_kompetensi9");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_kompetensi9() {
        $query  = $this->db->query("select * from table_kompetensi9");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_kompetensi9', $data, array('kompetensi9_id'=>$data['kompetensi9_id']));
    }

    public function delete($id) {
        $this->db->delete('table_kompetensi9', array('kompetensi9_id' => $id));
    }

}
?>
