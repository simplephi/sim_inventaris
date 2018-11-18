<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {
    function __construct() {
        parent::__construct();
      $this->load->model("M_login");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if($_SERVER['REQUEST_METHOD'] == 'POST')
      {

  $user_name = $this->input->post('user_name');
  $user_password = md5($this->input->post('user_password'));



  $query  = $this->db->query("select * from table_user where user_name='$user_name' and user_password='$user_password'");

      if($query->num_rows()>0){
                echo json_encode($query->result());
                 // echo 'berhasil';
      }
      else
      {
        echo json_encode('gagal');
      }

      }
        else{
        echo json_encode('GET');
        }

  }

}
?>
