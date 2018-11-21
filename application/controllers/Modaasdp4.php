<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Modaasdp4 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_modaasdp4");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['modaasdp4']=$this->M_modaasdp4->tampil_data_modaasdp4();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("modaasdp4",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/modaasdp4/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['modaasdp4_file']['name'])
        {
            if ($this->upload->do_upload('modaasdp4_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'modaasdp4_file' =>$gbr['file_name'],
                  'modaasdp4_name' =>$this->input->post('modaasdp4_name'),
          'modaasdp4_input' =>$this->input->post('modaasdp4_input'),
          'modaasdp4_verifikasi' =>$this->input->post('modaasdp4_verifikasi'),
          'modaasdp4_satuan' =>$this->input->post('modaasdp4_satuan'),
          'modaasdp4_sumber' =>$this->input->post('modaasdp4_sumber'),
                    );
                $this->M_modaasdp4->input($data);
            }
        }

        else
        {
        $data['modaasdp4_name'] = $this->input->post('modaasdp4_name');
        $data['modaasdp4_input'] = $this->input->post('modaasdp4_input');
        $data['modaasdp4_verifikasi'] = $this->input->post('modaasdp4_verifikasi');
        $data['modaasdp4_satuan'] = $this->input->post('modaasdp4_satuan');
        $data['modaasdp4_sumber'] = $this->input->post('modaasdp4_sumber');
        $data['modaasdp4_file'] = $this->input->post('modaasdp4_file');

        //call function
        $this->M_modaasdp4->input($data);
        //redirect to page

      }
          redirect('modaasdp4'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/modaasdp4/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['modaasdp4_file']['name'])
         {
          unlink('./assets/modaasdp4/'.$this->input->post('modaasdp4_file'));
             if ($this->upload->do_upload('modaasdp4_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'modaasdp4_id' =>$this->input->post('modaasdp4_id'),
        'modaasdp4_file' =>$gbr['file_name'],
                 'modaasdp4_name' =>$this->input->post('modaasdp4_name'),
                 'modaasdp4_input' =>$this->input->post('modaasdp4_input'),
                 'modaasdp4_verifikasi' =>$this->input->post('modaasdp4_verifikasi'),
                 'modaasdp4_satuan' =>$this->input->post('modaasdp4_satuan'),
                 'modaasdp4_sumber' =>$this->input->post('modaasdp4_sumber'),
                     );
                 $this->M_modaasdp4->edit($data);
             }
         }

         else
         {
           $data['modaasdp4_id'] = $this->input->post('modaasdp4_id');
           $data['modaasdp4_name'] = $this->input->post('modaasdp4_name');
           $data['modaasdp4_input'] = $this->input->post('modaasdp4_input');
           $data['modaasdp4_verifikasi'] = $this->input->post('modaasdp4_verifikasi');
           $data['modaasdp4_satuan'] = $this->input->post('modaasdp4_satuan');
           $data['modaasdp4_sumber'] = $this->input->post('modaasdp4_sumber');
           $data['modaasdp4_file'] = $this->input->post('modaasdp4_file');
         //call function
         $this->M_modaasdp4->edit($data);
         //redirect to page

        }
           redirect('modaasdp4'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/modaasdp4/'.$this->input->post('modaasdp4_file'));
            $this->M_modaasdp4->delete($this->input->post('modaasdp4_id'));
        redirect('modaasdp4');

    }
}
?>
