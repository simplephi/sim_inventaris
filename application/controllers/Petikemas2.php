<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Petikemas2 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_petikemas2");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['petikemas2']=$this->M_petikemas2->tampil_data_petikemas2();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("petikemas2",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/petikemas2/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['petikemas2_file']['name'])
        {
            if ($this->upload->do_upload('petikemas2_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'petikemas2_file' =>$gbr['file_name'],
                  'petikemas2_name' =>$this->input->post('petikemas2_name'),
          'petikemas2_input' =>$this->input->post('petikemas2_input'),
          'petikemas2_verifikasi' =>$this->input->post('petikemas2_verifikasi'),
          'petikemas2_satuan' =>$this->input->post('petikemas2_satuan'),
          'petikemas2_sumber' =>$this->input->post('petikemas2_sumber'),
                    );
                $this->M_petikemas2->input($data);
            }
        }

        else
        {
        $data['petikemas2_name'] = $this->input->post('petikemas2_name');
        $data['petikemas2_input'] = $this->input->post('petikemas2_input');
        $data['petikemas2_verifikasi'] = $this->input->post('petikemas2_verifikasi');
        $data['petikemas2_satuan'] = $this->input->post('petikemas2_satuan');
        $data['petikemas2_sumber'] = $this->input->post('petikemas2_sumber');
        $data['petikemas2_file'] = $this->input->post('petikemas2_file');

        //call function
        $this->M_petikemas2->input($data);
        //redirect to page

      }
          redirect('petikemas2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/petikemas2/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['petikemas2_file']['name'])
         {
          unlink('./assets/petikemas2/'.$this->input->post('petikemas2_file'));
             if ($this->upload->do_upload('petikemas2_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'petikemas2_id' =>$this->input->post('petikemas2_id'),
        'petikemas2_file' =>$gbr['file_name'],
                 'petikemas2_name' =>$this->input->post('petikemas2_name'),
                 'petikemas2_input' =>$this->input->post('petikemas2_input'),
                 'petikemas2_verifikasi' =>$this->input->post('petikemas2_verifikasi'),
                 'petikemas2_satuan' =>$this->input->post('petikemas2_satuan'),
                 'petikemas2_sumber' =>$this->input->post('petikemas2_sumber'),
                     );
                 $this->M_petikemas2->edit($data);
             }
         }

         else
         {
           $data['petikemas2_id'] = $this->input->post('petikemas2_id');
           $data['petikemas2_name'] = $this->input->post('petikemas2_name');
           $data['petikemas2_input'] = $this->input->post('petikemas2_input');
           $data['petikemas2_verifikasi'] = $this->input->post('petikemas2_verifikasi');
           $data['petikemas2_satuan'] = $this->input->post('petikemas2_satuan');
           $data['petikemas2_sumber'] = $this->input->post('petikemas2_sumber');
           $data['petikemas2_file'] = $this->input->post('petikemas2_file');
         //call function
         $this->M_petikemas2->edit($data);
         //redirect to page

        }
           redirect('petikemas2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/petikemas2/'.$this->input->post('petikemas2_file'));
            $this->M_petikemas2->delete($this->input->post('petikemas2_id'));
        redirect('petikemas2');

    }
}
?>
