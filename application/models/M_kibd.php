<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_kibd extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_kibd', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_kibd");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_kibd");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_kibd() {
        $query  = $this->db->query("select * from table_kibd");
        return $query->result();
    }

	public function edit($data) {
        $this->db->update('table_kibd', $data, array('kibd_id'=>$data['kibd_id']));
    }

    public function delete($id) {
        $this->db->delete('table_kibd', array('kibd_id' => $id));
    }

}
?>
