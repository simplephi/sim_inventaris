<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_masuk extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_masuk', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_masuk");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_masuk");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_masuk() {
        $query  = $this->db->query("select * from table_masuk");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_masuk', $data, array('masuk_id'=>$data['masuk_id']));
    }

    public function delete($id) {
        $this->db->delete('table_masuk', array('masuk_id' => $id));
    }

}
?>
