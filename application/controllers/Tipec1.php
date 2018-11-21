<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tipec1 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_tipec1");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['tipec1']=$this->M_tipec1->tampil_data_tipec1();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("tipec1",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/tipec1/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['tipec1_file']['name'])
        {
            if ($this->upload->do_upload('tipec1_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'tipec1_file' =>$gbr['file_name'],
                  'tipec1_name' =>$this->input->post('tipec1_name'),
          'tipec1_input' =>$this->input->post('tipec1_input'),
          'tipec1_verifikasi' =>$this->input->post('tipec1_verifikasi'),
          'tipec1_satuan' =>$this->input->post('tipec1_satuan'),
          'tipec1_sumber' =>$this->input->post('tipec1_sumber'),
                    );
                $this->M_tipec1->input($data);
            }
        }

        else
        {
        $data['tipec1_name'] = $this->input->post('tipec1_name');
        $data['tipec1_input'] = $this->input->post('tipec1_input');
        $data['tipec1_verifikasi'] = $this->input->post('tipec1_verifikasi');
        $data['tipec1_satuan'] = $this->input->post('tipec1_satuan');
        $data['tipec1_sumber'] = $this->input->post('tipec1_sumber');
        $data['tipec1_file'] = $this->input->post('tipec1_file');

        //call function
        $this->M_tipec1->input($data);
        //redirect to page

      }
          redirect('tipec1'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/tipec1/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['tipec1_file']['name'])
         {
          unlink('./assets/tipec1/'.$this->input->post('tipec1_file'));
             if ($this->upload->do_upload('tipec1_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'tipec1_id' =>$this->input->post('tipec1_id'),
        'tipec1_file' =>$gbr['file_name'],
                 'tipec1_name' =>$this->input->post('tipec1_name'),
                 'tipec1_input' =>$this->input->post('tipec1_input'),
                 'tipec1_verifikasi' =>$this->input->post('tipec1_verifikasi'),
                 'tipec1_satuan' =>$this->input->post('tipec1_satuan'),
                 'tipec1_sumber' =>$this->input->post('tipec1_sumber'),
                     );
                 $this->M_tipec1->edit($data);
             }
         }

         else
         {
           $data['tipec1_id'] = $this->input->post('tipec1_id');
           $data['tipec1_name'] = $this->input->post('tipec1_name');
           $data['tipec1_input'] = $this->input->post('tipec1_input');
           $data['tipec1_verifikasi'] = $this->input->post('tipec1_verifikasi');
           $data['tipec1_satuan'] = $this->input->post('tipec1_satuan');
           $data['tipec1_sumber'] = $this->input->post('tipec1_sumber');
           $data['tipec1_file'] = $this->input->post('tipec1_file');
         //call function
         $this->M_tipec1->edit($data);
         //redirect to page

        }
           redirect('tipec1'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/tipec1/'.$this->input->post('tipec1_file'));
            $this->M_tipec1->delete($this->input->post('tipec1_id'));
        redirect('tipec1');

    }
}
?>
