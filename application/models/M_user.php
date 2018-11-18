<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class M_user extends CI_Model{

    function __construct() {
        parent::__construct();
    }

    public function input($data) {
        $this->db->insert('table_user', $data);
    }

    public function record_count() {
        return $this->db->count_all("table_user");
    }

    public function fetch_countries($limit, $start) {
            $this->db->limit($limit, $start);
            $query = $this->db->get("table_user");

            if ($query->num_rows() > 0) {
                foreach ($query->result() as $row) {
                    $data[] = $row;
                }
                return $data;
            }
            return false;
       }

	public function tampil_data_user() {
        $query  = $this->db->query("select * from table_user");
        return $query->result();
    }

    public function tampil_data_user1() {
          $query  = $this->db->query("select * from table_groups");
          return $query->result();
      }

    public function tampil_data_user2() {
          $this->db->select('*');
          $this->db->from('table_user');
          $this->db->join('table_groups', 'table_groups.group_id = table_user.group_id');

          $query = $this->db->get();
          return $query->result();
      }

	public function edit($data) {
        $this->db->update('table_user', $data, array('user_id'=>$data['user_id']));
    }

    public function delete($id) {
        $this->db->delete('table_user', array('user_id' => $id));
    }

}
?>
