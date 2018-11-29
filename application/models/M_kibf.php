<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kibf extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_kibf', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_kibf");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_kibf");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_kibf() {
        $query  = $this->db->query("select * from table_kibf");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_kibf', $data, array('kibf_id'=>$data['kibf_id']));
    }

    public function delete($id) {
        $this->db->delete('table_kibf', array('kibf_id' => $id));
    }

}
?>
