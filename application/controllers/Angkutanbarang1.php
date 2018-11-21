<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Angkutanbarang1 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_angkutanbarang1");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['angkutanbarang1']=$this->M_angkutanbarang1->tampil_data_angkutanbarang1();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("angkutanbarang1",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/angkutanbarang1/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['angkutanbarang1_file']['name'])
        {
            if ($this->upload->do_upload('angkutanbarang1_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'angkutanbarang1_file' =>$gbr['file_name'],
                  'angkutanbarang1_name' =>$this->input->post('angkutanbarang1_name'),
          'angkutanbarang1_input' =>$this->input->post('angkutanbarang1_input'),
          'angkutanbarang1_verifikasi' =>$this->input->post('angkutanbarang1_verifikasi'),
          'angkutanbarang1_satuan' =>$this->input->post('angkutanbarang1_satuan'),
          'angkutanbarang1_sumber' =>$this->input->post('angkutanbarang1_sumber'),
                    );
                $this->M_angkutanbarang1->input($data);
            }
        }

        else
        {
        $data['angkutanbarang1_name'] = $this->input->post('angkutanbarang1_name');
        $data['angkutanbarang1_input'] = $this->input->post('angkutanbarang1_input');
        $data['angkutanbarang1_verifikasi'] = $this->input->post('angkutanbarang1_verifikasi');
        $data['angkutanbarang1_satuan'] = $this->input->post('angkutanbarang1_satuan');
        $data['angkutanbarang1_sumber'] = $this->input->post('angkutanbarang1_sumber');
        $data['angkutanbarang1_file'] = $this->input->post('angkutanbarang1_file');

        //call function
        $this->M_angkutanbarang1->input($data);
        //redirect to page

      }
          redirect('angkutanbarang1'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/angkutanbarang1/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['angkutanbarang1_file']['name'])
         {
          unlink('./assets/angkutanbarang1/'.$this->input->post('angkutanbarang1_file'));
             if ($this->upload->do_upload('angkutanbarang1_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'angkutanbarang1_id' =>$this->input->post('angkutanbarang1_id'),
        'angkutanbarang1_file' =>$gbr['file_name'],
                 'angkutanbarang1_name' =>$this->input->post('angkutanbarang1_name'),
                 'angkutanbarang1_input' =>$this->input->post('angkutanbarang1_input'),
                 'angkutanbarang1_verifikasi' =>$this->input->post('angkutanbarang1_verifikasi'),
                 'angkutanbarang1_satuan' =>$this->input->post('angkutanbarang1_satuan'),
                 'angkutanbarang1_sumber' =>$this->input->post('angkutanbarang1_sumber'),
                     );
                 $this->M_angkutanbarang1->edit($data);
             }
         }

         else
         {
           $data['angkutanbarang1_id'] = $this->input->post('angkutanbarang1_id');
           $data['angkutanbarang1_name'] = $this->input->post('angkutanbarang1_name');
           $data['angkutanbarang1_input'] = $this->input->post('angkutanbarang1_input');
           $data['angkutanbarang1_verifikasi'] = $this->input->post('angkutanbarang1_verifikasi');
           $data['angkutanbarang1_satuan'] = $this->input->post('angkutanbarang1_satuan');
           $data['angkutanbarang1_sumber'] = $this->input->post('angkutanbarang1_sumber');
           $data['angkutanbarang1_file'] = $this->input->post('angkutanbarang1_file');
         //call function
         $this->M_angkutanbarang1->edit($data);
         //redirect to page

        }
           redirect('angkutanbarang1'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/angkutanbarang1/'.$this->input->post('angkutanbarang1_file'));
            $this->M_angkutanbarang1->delete($this->input->post('angkutanbarang1_id'));
        redirect('angkutanbarang1');

    }
}
?>
