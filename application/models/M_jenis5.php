<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_jenis5 extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_jenis5', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_jenis5");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_jenis5");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_jenis5() {
        $query  = $this->db->query("select * from table_jenis5");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_jenis5', $data, array('jenis5_id'=>$data['jenis5_id']));
    }

    public function delete($id) {
        $this->db->delete('table_jenis5', array('jenis5_id' => $id));
    }

}
?>
