<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kapalpenumpang1 extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_kapalpenumpang1', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_kapalpenumpang1");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_kapalpenumpang1");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_kapalpenumpang1() {
        $query  = $this->db->query("select * from table_kapalpenumpang1");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_kapalpenumpang1', $data, array('kapalpenumpang1_id'=>$data['kapalpenumpang1_id']));
    }

    public function delete($id) {
        $this->db->delete('table_kapalpenumpang1', array('kapalpenumpang1_id' => $id));
    }

}
?>
