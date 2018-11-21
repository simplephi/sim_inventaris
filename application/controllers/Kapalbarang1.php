<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kapalbarang1 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_kapalbarang1");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['kapalbarang1']=$this->M_kapalbarang1->tampil_data_kapalbarang1();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("kapalbarang1",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/kapalbarang1/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['kapalbarang1_file']['name'])
        {
            if ($this->upload->do_upload('kapalbarang1_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'kapalbarang1_file' =>$gbr['file_name'],
                  'kapalbarang1_name' =>$this->input->post('kapalbarang1_name'),
          'kapalbarang1_input' =>$this->input->post('kapalbarang1_input'),
          'kapalbarang1_verifikasi' =>$this->input->post('kapalbarang1_verifikasi'),
          'kapalbarang1_satuan' =>$this->input->post('kapalbarang1_satuan'),
          'kapalbarang1_sumber' =>$this->input->post('kapalbarang1_sumber'),
                    );
                $this->M_kapalbarang1->input($data);
            }
        }

        else
        {
        $data['kapalbarang1_name'] = $this->input->post('kapalbarang1_name');
        $data['kapalbarang1_input'] = $this->input->post('kapalbarang1_input');
        $data['kapalbarang1_verifikasi'] = $this->input->post('kapalbarang1_verifikasi');
        $data['kapalbarang1_satuan'] = $this->input->post('kapalbarang1_satuan');
        $data['kapalbarang1_sumber'] = $this->input->post('kapalbarang1_sumber');
        $data['kapalbarang1_file'] = $this->input->post('kapalbarang1_file');

        //call function
        $this->M_kapalbarang1->input($data);
        //redirect to page

      }
          redirect('kapalbarang1'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/kapalbarang1/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['kapalbarang1_file']['name'])
         {
          unlink('./assets/kapalbarang1/'.$this->input->post('kapalbarang1_file'));
             if ($this->upload->do_upload('kapalbarang1_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'kapalbarang1_id' =>$this->input->post('kapalbarang1_id'),
        'kapalbarang1_file' =>$gbr['file_name'],
                 'kapalbarang1_name' =>$this->input->post('kapalbarang1_name'),
                 'kapalbarang1_input' =>$this->input->post('kapalbarang1_input'),
                 'kapalbarang1_verifikasi' =>$this->input->post('kapalbarang1_verifikasi'),
                 'kapalbarang1_satuan' =>$this->input->post('kapalbarang1_satuan'),
                 'kapalbarang1_sumber' =>$this->input->post('kapalbarang1_sumber'),
                     );
                 $this->M_kapalbarang1->edit($data);
             }
         }

         else
         {
           $data['kapalbarang1_id'] = $this->input->post('kapalbarang1_id');
           $data['kapalbarang1_name'] = $this->input->post('kapalbarang1_name');
           $data['kapalbarang1_input'] = $this->input->post('kapalbarang1_input');
           $data['kapalbarang1_verifikasi'] = $this->input->post('kapalbarang1_verifikasi');
           $data['kapalbarang1_satuan'] = $this->input->post('kapalbarang1_satuan');
           $data['kapalbarang1_sumber'] = $this->input->post('kapalbarang1_sumber');
           $data['kapalbarang1_file'] = $this->input->post('kapalbarang1_file');
         //call function
         $this->M_kapalbarang1->edit($data);
         //redirect to page

        }
           redirect('kapalbarang1'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/kapalbarang1/'.$this->input->post('kapalbarang1_file'));
            $this->M_kapalbarang1->delete($this->input->post('kapalbarang1_id'));
        redirect('kapalbarang1');

    }
}
?>