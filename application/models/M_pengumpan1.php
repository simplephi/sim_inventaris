<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengumpan1 extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_pengumpan1', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_pengumpan1");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_pengumpan1");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_pengumpan1() {
        $query  = $this->db->query("select * from table_pengumpan1");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_pengumpan1', $data, array('pengumpan1_id'=>$data['pengumpan1_id']));
    }

    public function delete($id) {
        $this->db->delete('table_pengumpan1', array('pengumpan1_id' => $id));
    }

}
?>
