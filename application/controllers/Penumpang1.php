<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Penumpang1 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_penumpang1");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['penumpang1']=$this->M_penumpang1->tampil_data_penumpang1();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("penumpang1",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/penumpang1/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['penumpang1_file']['name'])
        {
            if ($this->upload->do_upload('penumpang1_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'penumpang1_file' =>$gbr['file_name'],
                  'penumpang1_name' =>$this->input->post('penumpang1_name'),
          'penumpang1_input' =>$this->input->post('penumpang1_input'),
          'penumpang1_verifikasi' =>$this->input->post('penumpang1_verifikasi'),
          'penumpang1_satuan' =>$this->input->post('penumpang1_satuan'),
          'penumpang1_sumber' =>$this->input->post('penumpang1_sumber'),
                    );
                $this->M_penumpang1->input($data);
            }
        }

        else
        {
        $data['penumpang1_name'] = $this->input->post('penumpang1_name');
        $data['penumpang1_input'] = $this->input->post('penumpang1_input');
        $data['penumpang1_verifikasi'] = $this->input->post('penumpang1_verifikasi');
        $data['penumpang1_satuan'] = $this->input->post('penumpang1_satuan');
        $data['penumpang1_sumber'] = $this->input->post('penumpang1_sumber');
        $data['penumpang1_file'] = $this->input->post('penumpang1_file');

        //call function
        $this->M_penumpang1->input($data);
        //redirect to page

      }
          redirect('penumpang1'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/penumpang1/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['penumpang1_file']['name'])
         {
          unlink('./assets/penumpang1/'.$this->input->post('penumpang1_file'));
             if ($this->upload->do_upload('penumpang1_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'penumpang1_id' =>$this->input->post('penumpang1_id'),
        'penumpang1_file' =>$gbr['file_name'],
                 'penumpang1_name' =>$this->input->post('penumpang1_name'),
                 'penumpang1_input' =>$this->input->post('penumpang1_input'),
                 'penumpang1_verifikasi' =>$this->input->post('penumpang1_verifikasi'),
                 'penumpang1_satuan' =>$this->input->post('penumpang1_satuan'),
                 'penumpang1_sumber' =>$this->input->post('penumpang1_sumber'),
                     );
                 $this->M_penumpang1->edit($data);
             }
         }

         else
         {
           $data['penumpang1_id'] = $this->input->post('penumpang1_id');
           $data['penumpang1_name'] = $this->input->post('penumpang1_name');
           $data['penumpang1_input'] = $this->input->post('penumpang1_input');
           $data['penumpang1_verifikasi'] = $this->input->post('penumpang1_verifikasi');
           $data['penumpang1_satuan'] = $this->input->post('penumpang1_satuan');
           $data['penumpang1_sumber'] = $this->input->post('penumpang1_sumber');
           $data['penumpang1_file'] = $this->input->post('penumpang1_file');
         //call function
         $this->M_penumpang1->edit($data);
         //redirect to page

        }
           redirect('penumpang1'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/penumpang1/'.$this->input->post('penumpang1_file'));
            $this->M_penumpang1->delete($this->input->post('penumpang1_id'));
        redirect('penumpang1');

    }
}
?>