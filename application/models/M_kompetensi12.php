<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kompetensi12 extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_kompetensi12', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_kompetensi12");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_kompetensi12");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_kompetensi12() {
        $query  = $this->db->query("select * from table_kompetensi12");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_kompetensi12', $data, array('kompetensi12_id'=>$data['kompetensi12_id']));
    }

    public function delete($id) {
        $this->db->delete('table_kompetensi12', array('kompetensi12_id' => $id));
    }

}
?>
