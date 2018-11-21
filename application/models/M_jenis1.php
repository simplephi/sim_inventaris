<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jenis1 extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_jenis1', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_jenis1");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_jenis1");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_jenis1() {
        $query  = $this->db->query("select * from table_jenis1");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_jenis1', $data, array('jenis1_id'=>$data['jenis1_id']));
    }

    public function delete($id) {
        $this->db->delete('table_jenis1', array('jenis1_id' => $id));
    }

}
?>
