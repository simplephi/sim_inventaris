<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pegawai extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_pegawai', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_pegawai");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_pegawai");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

    public function tampil_data_pegawai() {
        $query  = $this->db->query("select * from table_pegawai");
        return $query->result();
    }

    public function edit($data) {
        $this->db->update('table_pegawai', $data, array('pegawai_id'=>$data['pegawai_id']));
    }

    public function delete($id) {
        $this->db->delete('table_pegawai', array('pegawai_id' => $id));
    }

}
?>
