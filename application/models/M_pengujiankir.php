<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_pengujiankir extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_pengujiankir', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_pengujiankir");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_pengujiankir");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

    public function tampil_data_pengujiankir() {
        $query  = $this->db->query("select * from table_pengujiankir");
        return $query->result();
    }

    public function edit($data) {
        $this->db->update('table_pengujiankir', $data, array('pengujiankir_id'=>$data['pengujiankir_id']));
    }

    public function delete($id) {
        $this->db->delete('table_pengujiankir', array('pengujiankir_id' => $id));
    }

}
?>
