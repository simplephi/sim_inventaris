<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Modaasdp5 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_modaasdp5");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['modaasdp5']=$this->M_modaasdp5->tampil_data_modaasdp5();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("modaasdp5",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/modaasdp5/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['modaasdp5_file']['name'])
        {
            if ($this->upload->do_upload('modaasdp5_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'modaasdp5_file' =>$gbr['file_name'],
                  'modaasdp5_name' =>$this->input->post('modaasdp5_name'),
          'modaasdp5_input' =>$this->input->post('modaasdp5_input'),
          'modaasdp5_verifikasi' =>$this->input->post('modaasdp5_verifikasi'),
          'modaasdp5_satuan' =>$this->input->post('modaasdp5_satuan'),
          'modaasdp5_sumber' =>$this->input->post('modaasdp5_sumber'),
                    );
                $this->M_modaasdp5->input($data);
            }
        }

        else
        {
        $data['modaasdp5_name'] = $this->input->post('modaasdp5_name');
        $data['modaasdp5_input'] = $this->input->post('modaasdp5_input');
        $data['modaasdp5_verifikasi'] = $this->input->post('modaasdp5_verifikasi');
        $data['modaasdp5_satuan'] = $this->input->post('modaasdp5_satuan');
        $data['modaasdp5_sumber'] = $this->input->post('modaasdp5_sumber');
        $data['modaasdp5_file'] = $this->input->post('modaasdp5_file');

        //call function
        $this->M_modaasdp5->input($data);
        //redirect to page

      }
          redirect('modaasdp5'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/modaasdp5/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['modaasdp5_file']['name'])
         {
          unlink('./assets/modaasdp5/'.$this->input->post('modaasdp5_file'));
             if ($this->upload->do_upload('modaasdp5_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'modaasdp5_id' =>$this->input->post('modaasdp5_id'),
        'modaasdp5_file' =>$gbr['file_name'],
                 'modaasdp5_name' =>$this->input->post('modaasdp5_name'),
                 'modaasdp5_input' =>$this->input->post('modaasdp5_input'),
                 'modaasdp5_verifikasi' =>$this->input->post('modaasdp5_verifikasi'),
                 'modaasdp5_satuan' =>$this->input->post('modaasdp5_satuan'),
                 'modaasdp5_sumber' =>$this->input->post('modaasdp5_sumber'),
                     );
                 $this->M_modaasdp5->edit($data);
             }
         }

         else
         {
           $data['modaasdp5_id'] = $this->input->post('modaasdp5_id');
           $data['modaasdp5_name'] = $this->input->post('modaasdp5_name');
           $data['modaasdp5_input'] = $this->input->post('modaasdp5_input');
           $data['modaasdp5_verifikasi'] = $this->input->post('modaasdp5_verifikasi');
           $data['modaasdp5_satuan'] = $this->input->post('modaasdp5_satuan');
           $data['modaasdp5_sumber'] = $this->input->post('modaasdp5_sumber');
           $data['modaasdp5_file'] = $this->input->post('modaasdp5_file');
         //call function
         $this->M_modaasdp5->edit($data);
         //redirect to page

        }
           redirect('modaasdp5'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/modaasdp5/'.$this->input->post('modaasdp5_file'));
            $this->M_modaasdp5->delete($this->input->post('modaasdp5_id'));
        redirect('modaasdp5');

    }
}
?>