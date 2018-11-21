<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jenis6 extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_jenis6', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_jenis6");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_jenis6");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_jenis6() {
        $query  = $this->db->query("select * from table_jenis6");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_jenis6', $data, array('jenis6_id'=>$data['jenis6_id']));
    }

    public function delete($id) {
        $this->db->delete('table_jenis6', array('jenis6_id' => $id));
    }

}
?>
