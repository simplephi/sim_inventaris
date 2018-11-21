<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_badanusaha2 extends CI_Model{

    function __construct() {
        parent::__construct();
    }


    public function input($data) {
        $this->db->insert('table_badanusaha2', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_badanusaha2");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_badanusaha2");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

    public function tampil_data_badanusaha2() {
        $query  = $this->db->query("select * from table_badanusaha2");
        return $query->result();
    }

    public function edit($data) {
        $this->db->update('table_badanusaha2', $data, array('badanusaha2_id'=>$data['badanusaha2_id']));
    }

    public function delete($id) {
        $this->db->delete('table_badanusaha2', array('badanusaha2_id' => $id));
    }

}
?>