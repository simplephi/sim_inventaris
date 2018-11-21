<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Modaasdp3 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_modaasdp3");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['modaasdp3']=$this->M_modaasdp3->tampil_data_modaasdp3();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("modaasdp3",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/modaasdp3/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['modaasdp3_file']['name'])
        {
            if ($this->upload->do_upload('modaasdp3_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'modaasdp3_file' =>$gbr['file_name'],
                  'modaasdp3_name' =>$this->input->post('modaasdp3_name'),
          'modaasdp3_input' =>$this->input->post('modaasdp3_input'),
          'modaasdp3_verifikasi' =>$this->input->post('modaasdp3_verifikasi'),
          'modaasdp3_satuan' =>$this->input->post('modaasdp3_satuan'),
          'modaasdp3_sumber' =>$this->input->post('modaasdp3_sumber'),
                    );
                $this->M_modaasdp3->input($data);
            }
        }

        else
        {
        $data['modaasdp3_name'] = $this->input->post('modaasdp3_name');
        $data['modaasdp3_input'] = $this->input->post('modaasdp3_input');
        $data['modaasdp3_verifikasi'] = $this->input->post('modaasdp3_verifikasi');
        $data['modaasdp3_satuan'] = $this->input->post('modaasdp3_satuan');
        $data['modaasdp3_sumber'] = $this->input->post('modaasdp3_sumber');
        $data['modaasdp3_file'] = $this->input->post('modaasdp3_file');

        //call function
        $this->M_modaasdp3->input($data);
        //redirect to page

      }
          redirect('modaasdp3'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/modaasdp3/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['modaasdp3_file']['name'])
         {
          unlink('./assets/modaasdp3/'.$this->input->post('modaasdp3_file'));
             if ($this->upload->do_upload('modaasdp3_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'modaasdp3_id' =>$this->input->post('modaasdp3_id'),
        'modaasdp3_file' =>$gbr['file_name'],
                 'modaasdp3_name' =>$this->input->post('modaasdp3_name'),
                 'modaasdp3_input' =>$this->input->post('modaasdp3_input'),
                 'modaasdp3_verifikasi' =>$this->input->post('modaasdp3_verifikasi'),
                 'modaasdp3_satuan' =>$this->input->post('modaasdp3_satuan'),
                 'modaasdp3_sumber' =>$this->input->post('modaasdp3_sumber'),
                     );
                 $this->M_modaasdp3->edit($data);
             }
         }

         else
         {
           $data['modaasdp3_id'] = $this->input->post('modaasdp3_id');
           $data['modaasdp3_name'] = $this->input->post('modaasdp3_name');
           $data['modaasdp3_input'] = $this->input->post('modaasdp3_input');
           $data['modaasdp3_verifikasi'] = $this->input->post('modaasdp3_verifikasi');
           $data['modaasdp3_satuan'] = $this->input->post('modaasdp3_satuan');
           $data['modaasdp3_sumber'] = $this->input->post('modaasdp3_sumber');
           $data['modaasdp3_file'] = $this->input->post('modaasdp3_file');
         //call function
         $this->M_modaasdp3->edit($data);
         //redirect to page

        }
           redirect('modaasdp3'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/modaasdp3/'.$this->input->post('modaasdp3_file'));
            $this->M_modaasdp3->delete($this->input->post('modaasdp3_id'));
        redirect('modaasdp3');

    }
}
?>
