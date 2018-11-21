<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Modaasdp1 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_modaasdp1");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['modaasdp1']=$this->M_modaasdp1->tampil_data_modaasdp1();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("modaasdp1",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/modaasdp1/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['modaasdp1_file']['name'])
        {
            if ($this->upload->do_upload('modaasdp1_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'modaasdp1_file' =>$gbr['file_name'],
                  'modaasdp1_name' =>$this->input->post('modaasdp1_name'),
          'modaasdp1_input' =>$this->input->post('modaasdp1_input'),
          'modaasdp1_verifikasi' =>$this->input->post('modaasdp1_verifikasi'),
          'modaasdp1_satuan' =>$this->input->post('modaasdp1_satuan'),
          'modaasdp1_sumber' =>$this->input->post('modaasdp1_sumber'),
                    );
                $this->M_modaasdp1->input($data);
            }
        }

        else
        {
        $data['modaasdp1_name'] = $this->input->post('modaasdp1_name');
        $data['modaasdp1_input'] = $this->input->post('modaasdp1_input');
        $data['modaasdp1_verifikasi'] = $this->input->post('modaasdp1_verifikasi');
        $data['modaasdp1_satuan'] = $this->input->post('modaasdp1_satuan');
        $data['modaasdp1_sumber'] = $this->input->post('modaasdp1_sumber');
        $data['modaasdp1_file'] = $this->input->post('modaasdp1_file');

        //call function
        $this->M_modaasdp1->input($data);
        //redirect to page

      }
          redirect('modaasdp1'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/modaasdp1/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['modaasdp1_file']['name'])
         {
          unlink('./assets/modaasdp1/'.$this->input->post('modaasdp1_file'));
             if ($this->upload->do_upload('modaasdp1_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'modaasdp1_id' =>$this->input->post('modaasdp1_id'),
        'modaasdp1_file' =>$gbr['file_name'],
                 'modaasdp1_name' =>$this->input->post('modaasdp1_name'),
                 'modaasdp1_input' =>$this->input->post('modaasdp1_input'),
                 'modaasdp1_verifikasi' =>$this->input->post('modaasdp1_verifikasi'),
                 'modaasdp1_satuan' =>$this->input->post('modaasdp1_satuan'),
                 'modaasdp1_sumber' =>$this->input->post('modaasdp1_sumber'),
                     );
                 $this->M_modaasdp1->edit($data);
             }
         }

         else
         {
           $data['modaasdp1_id'] = $this->input->post('modaasdp1_id');
           $data['modaasdp1_name'] = $this->input->post('modaasdp1_name');
           $data['modaasdp1_input'] = $this->input->post('modaasdp1_input');
           $data['modaasdp1_verifikasi'] = $this->input->post('modaasdp1_verifikasi');
           $data['modaasdp1_satuan'] = $this->input->post('modaasdp1_satuan');
           $data['modaasdp1_sumber'] = $this->input->post('modaasdp1_sumber');
           $data['modaasdp1_file'] = $this->input->post('modaasdp1_file');
         //call function
         $this->M_modaasdp1->edit($data);
         //redirect to page

        }
           redirect('modaasdp1'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/modaasdp1/'.$this->input->post('modaasdp1_file'));
            $this->M_modaasdp1->delete($this->input->post('modaasdp1_id'));
        redirect('modaasdp1');

    }
}
?>
