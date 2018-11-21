<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Angkutanumum8 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_angkutanumum8");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['angkutanumum8']=$this->M_angkutanumum8->tampil_data_angkutanumum8();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("angkutanumum8",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/angkutanumum8/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['angkutanumum8_file']['name'])
        {
            if ($this->upload->do_upload('angkutanumum8_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'angkutanumum8_file' =>$gbr['file_name'],
                  'angkutanumum8_name' =>$this->input->post('angkutanumum8_name'),
          'angkutanumum8_input' =>$this->input->post('angkutanumum8_input'),
          'angkutanumum8_verifikasi' =>$this->input->post('angkutanumum8_verifikasi'),
          'angkutanumum8_satuan' =>$this->input->post('angkutanumum8_satuan'),
          'angkutanumum8_sumber' =>$this->input->post('angkutanumum8_sumber'),
                    );
                $this->M_angkutanumum8->input($data);
            }
        }

        else
        {
        $data['angkutanumum8_name'] = $this->input->post('angkutanumum8_name');
        $data['angkutanumum8_input'] = $this->input->post('angkutanumum8_input');
        $data['angkutanumum8_verifikasi'] = $this->input->post('angkutanumum8_verifikasi');
        $data['angkutanumum8_satuan'] = $this->input->post('angkutanumum8_satuan');
        $data['angkutanumum8_sumber'] = $this->input->post('angkutanumum8_sumber');
        $data['angkutanumum8_file'] = $this->input->post('angkutanumum8_file');

        //call function
        $this->M_angkutanumum8->input($data);
        //redirect to page

      }
          redirect('angkutanumum8'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/angkutanumum8/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['angkutanumum8_file']['name'])
         {
          unlink('./assets/angkutanumum8/'.$this->input->post('angkutanumum8_file'));
             if ($this->upload->do_upload('angkutanumum8_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'angkutanumum8_id' =>$this->input->post('angkutanumum8_id'),
        'angkutanumum8_file' =>$gbr['file_name'],
                 'angkutanumum8_name' =>$this->input->post('angkutanumum8_name'),
                 'angkutanumum8_input' =>$this->input->post('angkutanumum8_input'),
                 'angkutanumum8_verifikasi' =>$this->input->post('angkutanumum8_verifikasi'),
                 'angkutanumum8_satuan' =>$this->input->post('angkutanumum8_satuan'),
                 'angkutanumum8_sumber' =>$this->input->post('angkutanumum8_sumber'),
                     );
                 $this->M_angkutanumum8->edit($data);
             }
         }

         else
         {
           $data['angkutanumum8_id'] = $this->input->post('angkutanumum8_id');
           $data['angkutanumum8_name'] = $this->input->post('angkutanumum8_name');
           $data['angkutanumum8_input'] = $this->input->post('angkutanumum8_input');
           $data['angkutanumum8_verifikasi'] = $this->input->post('angkutanumum8_verifikasi');
           $data['angkutanumum8_satuan'] = $this->input->post('angkutanumum8_satuan');
           $data['angkutanumum8_sumber'] = $this->input->post('angkutanumum8_sumber');
           $data['angkutanumum8_file'] = $this->input->post('angkutanumum8_file');
         //call function
         $this->M_angkutanumum8->edit($data);
         //redirect to page

        }
           redirect('angkutanumum8'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/angkutanumum8/'.$this->input->post('angkutanumum8_file'));
            $this->M_angkutanumum8->delete($this->input->post('angkutanumum8_id'));
        redirect('angkutanumum8');

    }
}
?>