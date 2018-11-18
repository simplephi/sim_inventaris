<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class User extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_user");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
        if(!($this->session->userdata('user_id'))){
            $this->load->view("login");
        }else{
            $data['user']=$this->M_user->tampil_data_user();
            $data['kategori']=$this->M_user->tampil_data_user1();
            $data['kategori1']=$this->M_user->tampil_data_user2();
            $this->load->view("attribute/header");
            $this->load->view("attribute/menus");
            $this->load->view("user",$data);
            $this->load->view("attribute/footer");
        }
    }

    public function input() {
        $data['user_id']      = "";
        $data['user_name'] = $this->input->post('user_name');
        $data['user_password'] = md5($this->input->post('user_password'));
        $data['user_fullname'] = $this->input->post('user_fullname');
        $data['group_id'] = $this->input->post('group_id');
        //call function
        $this->M_user->input($data);
        //redirect to page
          redirect('user'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
     $password        = $this->input->post('user_password');
    $oldpassword     = $this->input->post('old_password');
    $newpassword     = $this->input->post('new_password');
    $confirmpassword = $this->input->post('confirm_password');
    if ($oldpassword != "") {
      if (md5($oldpassword) == $password) {
        if ($newpassword == $confirmpassword) {
          $data['user_id']       = $this->input->post('user_id');
          $data['user_name']     = $this->input->post('user_name');
          $data['user_fullname'] = $this->input->post('user_fullname');
          $data['group_id'] = $this->input->post('group_id');
          $data['user_password'] = md5($confirmpassword);
          $this->m_user->edit($data);
        }
      }
    } else {
      $data['user_id']       = $this->input->post('user_id');
      $data['user_name']     = $this->input->post('user_name');
      $data['user_fullname'] = $this->input->post('user_fullname');
      $data['group_id'] = $this->input->post('group_id');
      $this->m_user->edit($data);
    }
    redirect('user');
    }

    public function delete() {

        if($this->input->post('user_id')!="") {
            $this->M_user->delete($this->input->post('user_id'));
        }
        redirect('User');
    }
}
?>
