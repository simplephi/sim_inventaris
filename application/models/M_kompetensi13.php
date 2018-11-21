<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kompetensi13 extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_kompetensi13', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_kompetensi13");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_kompetensi13");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_kompetensi13() {
        $query  = $this->db->query("select * from table_kompetensi13");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_kompetensi13', $data, array('kompetensi13_id'=>$data['kompetensi13_id']));
    }

    public function delete($id) {
        $this->db->delete('table_kompetensi13', array('kompetensi13_id' => $id));
    }

}
?>
