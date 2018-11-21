<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kompetensi14 extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_kompetensi14', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_kompetensi14");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_kompetensi14");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_kompetensi14() {
        $query  = $this->db->query("select * from table_kompetensi14");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_kompetensi14', $data, array('kompetensi14_id'=>$data['kompetensi14_id']));
    }

    public function delete($id) {
        $this->db->delete('table_kompetensi14', array('kompetensi14_id' => $id));
    }

}
?>
