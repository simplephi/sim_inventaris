<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kapalpenumpang2 extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_kapalpenumpang2', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_kapalpenumpang2");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_kapalpenumpang2");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_kapalpenumpang2() {
        $query  = $this->db->query("select * from table_kapalpenumpang2");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_kapalpenumpang2', $data, array('kapalpenumpang2_id'=>$data['kapalpenumpang2_id']));
    }

    public function delete($id) {
        $this->db->delete('table_kapalpenumpang2', array('kapalpenumpang2_id' => $id));
    }

}
?>
