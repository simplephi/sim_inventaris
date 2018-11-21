<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Petikemas1 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_petikemas1");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['petikemas1']=$this->M_petikemas1->tampil_data_petikemas1();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("petikemas1",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/petikemas1/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['petikemas1_file']['name'])
        {
            if ($this->upload->do_upload('petikemas1_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'petikemas1_file' =>$gbr['file_name'],
                  'petikemas1_name' =>$this->input->post('petikemas1_name'),
          'petikemas1_input' =>$this->input->post('petikemas1_input'),
          'petikemas1_verifikasi' =>$this->input->post('petikemas1_verifikasi'),
          'petikemas1_satuan' =>$this->input->post('petikemas1_satuan'),
          'petikemas1_sumber' =>$this->input->post('petikemas1_sumber'),
                    );
                $this->M_petikemas1->input($data);
            }
        }

        else
        {
        $data['petikemas1_name'] = $this->input->post('petikemas1_name');
        $data['petikemas1_input'] = $this->input->post('petikemas1_input');
        $data['petikemas1_verifikasi'] = $this->input->post('petikemas1_verifikasi');
        $data['petikemas1_satuan'] = $this->input->post('petikemas1_satuan');
        $data['petikemas1_sumber'] = $this->input->post('petikemas1_sumber');
        $data['petikemas1_file'] = $this->input->post('petikemas1_file');

        //call function
        $this->M_petikemas1->input($data);
        //redirect to page

      }
          redirect('petikemas1'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/petikemas1/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['petikemas1_file']['name'])
         {
          unlink('./assets/petikemas1/'.$this->input->post('petikemas1_file'));
             if ($this->upload->do_upload('petikemas1_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'petikemas1_id' =>$this->input->post('petikemas1_id'),
        'petikemas1_file' =>$gbr['file_name'],
                 'petikemas1_name' =>$this->input->post('petikemas1_name'),
                 'petikemas1_input' =>$this->input->post('petikemas1_input'),
                 'petikemas1_verifikasi' =>$this->input->post('petikemas1_verifikasi'),
                 'petikemas1_satuan' =>$this->input->post('petikemas1_satuan'),
                 'petikemas1_sumber' =>$this->input->post('petikemas1_sumber'),
                     );
                 $this->M_petikemas1->edit($data);
             }
         }

         else
         {
           $data['petikemas1_id'] = $this->input->post('petikemas1_id');
           $data['petikemas1_name'] = $this->input->post('petikemas1_name');
           $data['petikemas1_input'] = $this->input->post('petikemas1_input');
           $data['petikemas1_verifikasi'] = $this->input->post('petikemas1_verifikasi');
           $data['petikemas1_satuan'] = $this->input->post('petikemas1_satuan');
           $data['petikemas1_sumber'] = $this->input->post('petikemas1_sumber');
           $data['petikemas1_file'] = $this->input->post('petikemas1_file');
         //call function
         $this->M_petikemas1->edit($data);
         //redirect to page

        }
           redirect('petikemas1'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/petikemas1/'.$this->input->post('petikemas1_file'));
            $this->M_petikemas1->delete($this->input->post('petikemas1_id'));
        redirect('petikemas1');

    }
}
?>