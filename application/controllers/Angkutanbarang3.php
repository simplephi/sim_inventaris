<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Angkutanbarang3 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_angkutanbarang3");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['angkutanbarang3']=$this->M_angkutanbarang3->tampil_data_angkutanbarang3();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("angkutanbarang3",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/angkutanbarang3/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['angkutanbarang3_file']['name'])
        {
            if ($this->upload->do_upload('angkutanbarang3_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'angkutanbarang3_file' =>$gbr['file_name'],
                  'angkutanbarang3_name' =>$this->input->post('angkutanbarang3_name'),
          'angkutanbarang3_input' =>$this->input->post('angkutanbarang3_input'),
          'angkutanbarang3_verifikasi' =>$this->input->post('angkutanbarang3_verifikasi'),
          'angkutanbarang3_satuan' =>$this->input->post('angkutanbarang3_satuan'),
          'angkutanbarang3_sumber' =>$this->input->post('angkutanbarang3_sumber'),
                    );
                $this->M_angkutanbarang3->input($data);
            }
        }

        else
        {
        $data['angkutanbarang3_name'] = $this->input->post('angkutanbarang3_name');
        $data['angkutanbarang3_input'] = $this->input->post('angkutanbarang3_input');
        $data['angkutanbarang3_verifikasi'] = $this->input->post('angkutanbarang3_verifikasi');
        $data['angkutanbarang3_satuan'] = $this->input->post('angkutanbarang3_satuan');
        $data['angkutanbarang3_sumber'] = $this->input->post('angkutanbarang3_sumber');
        $data['angkutanbarang3_file'] = $this->input->post('angkutanbarang3_file');

        //call function
        $this->M_angkutanbarang3->input($data);
        //redirect to page

      }
          redirect('angkutanbarang3'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/angkutanbarang3/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['angkutanbarang3_file']['name'])
         {
          unlink('./assets/angkutanbarang3/'.$this->input->post('angkutanbarang3_file'));
             if ($this->upload->do_upload('angkutanbarang3_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'angkutanbarang3_id' =>$this->input->post('angkutanbarang3_id'),
        'angkutanbarang3_file' =>$gbr['file_name'],
                 'angkutanbarang3_name' =>$this->input->post('angkutanbarang3_name'),
                 'angkutanbarang3_input' =>$this->input->post('angkutanbarang3_input'),
                 'angkutanbarang3_verifikasi' =>$this->input->post('angkutanbarang3_verifikasi'),
                 'angkutanbarang3_satuan' =>$this->input->post('angkutanbarang3_satuan'),
                 'angkutanbarang3_sumber' =>$this->input->post('angkutanbarang3_sumber'),
                     );
                 $this->M_angkutanbarang3->edit($data);
             }
         }

         else
         {
           $data['angkutanbarang3_id'] = $this->input->post('angkutanbarang3_id');
           $data['angkutanbarang3_name'] = $this->input->post('angkutanbarang3_name');
           $data['angkutanbarang3_input'] = $this->input->post('angkutanbarang3_input');
           $data['angkutanbarang3_verifikasi'] = $this->input->post('angkutanbarang3_verifikasi');
           $data['angkutanbarang3_satuan'] = $this->input->post('angkutanbarang3_satuan');
           $data['angkutanbarang3_sumber'] = $this->input->post('angkutanbarang3_sumber');
           $data['angkutanbarang3_file'] = $this->input->post('angkutanbarang3_file');
         //call function
         $this->M_angkutanbarang3->edit($data);
         //redirect to page

        }
           redirect('angkutanbarang3'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/angkutanbarang3/'.$this->input->post('angkutanbarang3_file'));
            $this->M_angkutanbarang3->delete($this->input->post('angkutanbarang3_id'));
        redirect('angkutanbarang3');

    }
}
?>
