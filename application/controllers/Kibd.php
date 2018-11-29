<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kibd extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_kibd");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['kibd']=$this->M_kibd->tampil_data_kibd();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("kibd",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
        $data['kibd_name'] = $this->input->post('kibd_name');
        $data['kibd_kodeb'] = $this->input->post('kibd_kodeb');
        $data['kibd_noreg'] = $this->input->post('kibd_noreg');
        $data['kibd_konstruksi'] = $this->input->post('kibd_konstruksi');
        $data['kibd_panjang'] = $this->input->post('kibd_panjang');
        $data['kibd_lebar'] = $this->input->post('kibd_lebar');
        $data['kibd_luas'] = $this->input->post('kibd_luas');
        $data['kibd_letak'] = $this->input->post('kibd_letak');
        $data['kibd_tgldok'] = $this->input->post('kibd_tgldok');
        $data['kibd_nodok'] = $this->input->post('kibd_nodok');
        $data['kibd_status'] = $this->input->post('kibd_status');
        $data['kibd_kodet'] = $this->input->post('kibd_kodet');
        $data['kibd_asal'] = $this->input->post('kibd_asal');
        $data['kibd_harga'] = $this->input->post('kibd_harga');
        $data['kibd_bangunan'] = $this->input->post('kibd_bangunan');
        $data['kibd_ket'] = $this->input->post('kibd_ket');

        //call function
        $this->M_kibd->input($data);
        //redirect to page
          redirect('kibd'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        $data['kibd_id'] = $this->input->post('kibd_id');
        $data['kibd_name'] = $this->input->post('kibd_name');
        $data['kibd_kodeb'] = $this->input->post('kibd_kodeb');
        $data['kibd_noreg'] = $this->input->post('kibd_noreg');
        $data['kibd_konstruksi'] = $this->input->post('kibd_konstruksi');
        $data['kibd_panjang'] = $this->input->post('kibd_panjang');
        $data['kibd_lebar'] = $this->input->post('kibd_lebar');
        $data['kibd_luas'] = $this->input->post('kibd_luas');
        $data['kibd_letak'] = $this->input->post('kibd_letak');
        $data['kibd_tgldok'] = $this->input->post('kibd_tgldok');
        $data['kibd_nodok'] = $this->input->post('kibd_nodok');
        $data['kibd_status'] = $this->input->post('kibd_status');
        $data['kibd_kodet'] = $this->input->post('kibd_kodet');
        $data['kibd_asal'] = $this->input->post('kibd_asal');
        $data['kibd_harga'] = $this->input->post('kibd_harga');
        $data['kibd_bangunan'] = $this->input->post('kibd_bangunan');
        $data['kibd_ket'] = $this->input->post('kibd_ket');

        //call function
        $this->M_kibd->edit($data);
        //redirect to page
          redirect('kibd'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            // unlink('./assets/kibd/'.$this->input->post('kibd_file'));
            $this->M_kibd->delete($this->input->post('kibd_id'));
        redirect('kibd');

    }
}
?>
