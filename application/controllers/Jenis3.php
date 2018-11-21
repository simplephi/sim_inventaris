<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Jenis3 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_jenis3");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['jenis3']=$this->M_jenis3->tampil_data_jenis3();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("jenis3",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/jenis3/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['jenis3_file']['name'])
        {
            if ($this->upload->do_upload('jenis3_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'jenis3_file' =>$gbr['file_name'],
                  'jenis3_name' =>$this->input->post('jenis3_name'),
          'jenis3_input' =>$this->input->post('jenis3_input'),
          'jenis3_verifikasi' =>$this->input->post('jenis3_verifikasi'),
          'jenis3_satuan' =>$this->input->post('jenis3_satuan'),
          'jenis3_sumber' =>$this->input->post('jenis3_sumber'),
                    );
                $this->M_jenis3->input($data);
            }
        }

        else
        {
        $data['jenis3_name'] = $this->input->post('jenis3_name');
        $data['jenis3_input'] = $this->input->post('jenis3_input');
        $data['jenis3_verifikasi'] = $this->input->post('jenis3_verifikasi');
        $data['jenis3_satuan'] = $this->input->post('jenis3_satuan');
        $data['jenis3_sumber'] = $this->input->post('jenis3_sumber');
        $data['jenis3_file'] = $this->input->post('jenis3_file');

        //call function
        $this->M_jenis3->input($data);
        //redirect to page

      }
          redirect('jenis3'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/jenis3/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['jenis3_file']['name'])
         {
          unlink('./assets/jenis3/'.$this->input->post('jenis3_file'));
             if ($this->upload->do_upload('jenis3_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'jenis3_id' =>$this->input->post('jenis3_id'),
        'jenis3_file' =>$gbr['file_name'],
                 'jenis3_name' =>$this->input->post('jenis3_name'),
                 'jenis3_input' =>$this->input->post('jenis3_input'),
                 'jenis3_verifikasi' =>$this->input->post('jenis3_verifikasi'),
                 'jenis3_satuan' =>$this->input->post('jenis3_satuan'),
                 'jenis3_sumber' =>$this->input->post('jenis3_sumber'),
                     );
                 $this->M_jenis3->edit($data);
             }
         }

         else
         {
           $data['jenis3_id'] = $this->input->post('jenis3_id');
           $data['jenis3_name'] = $this->input->post('jenis3_name');
           $data['jenis3_input'] = $this->input->post('jenis3_input');
           $data['jenis3_verifikasi'] = $this->input->post('jenis3_verifikasi');
           $data['jenis3_satuan'] = $this->input->post('jenis3_satuan');
           $data['jenis3_sumber'] = $this->input->post('jenis3_sumber');
           $data['jenis3_file'] = $this->input->post('jenis3_file');
         //call function
         $this->M_jenis3->edit($data);
         //redirect to page

        }
           redirect('jenis3'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/jenis3/'.$this->input->post('jenis3_file'));
            $this->M_jenis3->delete($this->input->post('jenis3_id'));
        redirect('jenis3');

    }
}
?>
