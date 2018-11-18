<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Home extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_login");
        $this->load->library("pagination");
    }

    public function index(){
        if(!($this->session->userdata('user_id'))){
            $this->load->view("login");
        }else {
            $data['user_id']=$this->session->userdata('group_id');

            $this->load->view("attribute/header");
            $this->load->view("attribute/menus",$data);
            $this->load->view("attribute/content");
            $this->load->view("attribute/footer");
        }
    }

    public function login(){
        if($_POST) {
            $data['user_name'] = $this->input->post('user_name');
            $data['user_password'] = md5($this->input->post('user_password'));
            // $data['group_id'] = $this->input->post('group_id');
            $result = $this->M_login->login($data);

          			if($result) {
                            $data = array(
                                'user_id' => $result->user_id,
                                'user_name' => $result->user_name,
                                'user_fullname' => $result->user_fullname,
                                'group_id' => $result->group_id,
                            );

                  				$this->session->set_userdata($data);
                  				redirect('Home');
                      }
               else {
                  $this->session->set_flashdata('flash_data', 'Username atau password salah!');

                redirect('Home');
              }
        }
    }

    public function logout() {
        $this->session->sess_destroy();
        redirect('Home');
    }

}
?>
