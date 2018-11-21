<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Modaasdp2 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_modaasdp2");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['modaasdp2']=$this->M_modaasdp2->tampil_data_modaasdp2();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("modaasdp2",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/modaasdp2/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['modaasdp2_file']['name'])
        {
            if ($this->upload->do_upload('modaasdp2_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'modaasdp2_file' =>$gbr['file_name'],
                  'modaasdp2_name' =>$this->input->post('modaasdp2_name'),
          'modaasdp2_input' =>$this->input->post('modaasdp2_input'),
          'modaasdp2_verifikasi' =>$this->input->post('modaasdp2_verifikasi'),
          'modaasdp2_satuan' =>$this->input->post('modaasdp2_satuan'),
          'modaasdp2_sumber' =>$this->input->post('modaasdp2_sumber'),
                    );
                $this->M_modaasdp2->input($data);
            }
        }

        else
        {
        $data['modaasdp2_name'] = $this->input->post('modaasdp2_name');
        $data['modaasdp2_input'] = $this->input->post('modaasdp2_input');
        $data['modaasdp2_verifikasi'] = $this->input->post('modaasdp2_verifikasi');
        $data['modaasdp2_satuan'] = $this->input->post('modaasdp2_satuan');
        $data['modaasdp2_sumber'] = $this->input->post('modaasdp2_sumber');
        $data['modaasdp2_file'] = $this->input->post('modaasdp2_file');

        //call function
        $this->M_modaasdp2->input($data);
        //redirect to page

      }
          redirect('modaasdp2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/modaasdp2/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['modaasdp2_file']['name'])
         {
          unlink('./assets/modaasdp2/'.$this->input->post('modaasdp2_file'));
             if ($this->upload->do_upload('modaasdp2_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'modaasdp2_id' =>$this->input->post('modaasdp2_id'),
        'modaasdp2_file' =>$gbr['file_name'],
                 'modaasdp2_name' =>$this->input->post('modaasdp2_name'),
                 'modaasdp2_input' =>$this->input->post('modaasdp2_input'),
                 'modaasdp2_verifikasi' =>$this->input->post('modaasdp2_verifikasi'),
                 'modaasdp2_satuan' =>$this->input->post('modaasdp2_satuan'),
                 'modaasdp2_sumber' =>$this->input->post('modaasdp2_sumber'),
                     );
                 $this->M_modaasdp2->edit($data);
             }
         }

         else
         {
           $data['modaasdp2_id'] = $this->input->post('modaasdp2_id');
           $data['modaasdp2_name'] = $this->input->post('modaasdp2_name');
           $data['modaasdp2_input'] = $this->input->post('modaasdp2_input');
           $data['modaasdp2_verifikasi'] = $this->input->post('modaasdp2_verifikasi');
           $data['modaasdp2_satuan'] = $this->input->post('modaasdp2_satuan');
           $data['modaasdp2_sumber'] = $this->input->post('modaasdp2_sumber');
           $data['modaasdp2_file'] = $this->input->post('modaasdp2_file');
         //call function
         $this->M_modaasdp2->edit($data);
         //redirect to page

        }
           redirect('modaasdp2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/modaasdp2/'.$this->input->post('modaasdp2_file'));
            $this->M_modaasdp2->delete($this->input->post('modaasdp2_id'));
        redirect('modaasdp2');

    }
}
?>
