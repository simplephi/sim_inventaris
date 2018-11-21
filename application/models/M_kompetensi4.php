<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kompetensi4 extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_kompetensi4', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_kompetensi4");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_kompetensi4");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_kompetensi4() {
        $query  = $this->db->query("select * from table_kompetensi4");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_kompetensi4', $data, array('kompetensi4_id'=>$data['kompetensi4_id']));
    }

    public function delete($id) {
        $this->db->delete('table_kompetensi4', array('kompetensi4_id' => $id));
    }

}
?>
