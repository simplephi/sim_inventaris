<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kompetensi3 extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_kompetensi3', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_kompetensi3");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_kompetensi3");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_kompetensi3() {
        $query  = $this->db->query("select * from table_kompetensi3");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_kompetensi3', $data, array('kompetensi3_id'=>$data['kompetensi3_id']));
    }

    public function delete($id) {
        $this->db->delete('table_kompetensi3', array('kompetensi3_id' => $id));
    }

}
?>
