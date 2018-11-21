<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tipeb1 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_tipeb1");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['tipeb1']=$this->M_tipeb1->tampil_data_tipeb1();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("tipeb1",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/tipeb1/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['tipeb1_file']['name'])
        {
            if ($this->upload->do_upload('tipeb1_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'tipeb1_file' =>$gbr['file_name'],
                  'tipeb1_name' =>$this->input->post('tipeb1_name'),
          'tipeb1_input' =>$this->input->post('tipeb1_input'),
          'tipeb1_verifikasi' =>$this->input->post('tipeb1_verifikasi'),
          'tipeb1_satuan' =>$this->input->post('tipeb1_satuan'),
          'tipeb1_sumber' =>$this->input->post('tipeb1_sumber'),
                    );
                $this->M_tipeb1->input($data);
            }
        }

        else
        {
        $data['tipeb1_name'] = $this->input->post('tipeb1_name');
        $data['tipeb1_input'] = $this->input->post('tipeb1_input');
        $data['tipeb1_verifikasi'] = $this->input->post('tipeb1_verifikasi');
        $data['tipeb1_satuan'] = $this->input->post('tipeb1_satuan');
        $data['tipeb1_sumber'] = $this->input->post('tipeb1_sumber');
        $data['tipeb1_file'] = $this->input->post('tipeb1_file');

        //call function
        $this->M_tipeb1->input($data);
        //redirect to page

      }
          redirect('tipeb1'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/tipeb1/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['tipeb1_file']['name'])
         {
          unlink('./assets/tipeb1/'.$this->input->post('tipeb1_file'));
             if ($this->upload->do_upload('tipeb1_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'tipeb1_id' =>$this->input->post('tipeb1_id'),
        'tipeb1_file' =>$gbr['file_name'],
                 'tipeb1_name' =>$this->input->post('tipeb1_name'),
                 'tipeb1_input' =>$this->input->post('tipeb1_input'),
                 'tipeb1_verifikasi' =>$this->input->post('tipeb1_verifikasi'),
                 'tipeb1_satuan' =>$this->input->post('tipeb1_satuan'),
                 'tipeb1_sumber' =>$this->input->post('tipeb1_sumber'),
                     );
                 $this->M_tipeb1->edit($data);
             }
         }

         else
         {
           $data['tipeb1_id'] = $this->input->post('tipeb1_id');
           $data['tipeb1_name'] = $this->input->post('tipeb1_name');
           $data['tipeb1_input'] = $this->input->post('tipeb1_input');
           $data['tipeb1_verifikasi'] = $this->input->post('tipeb1_verifikasi');
           $data['tipeb1_satuan'] = $this->input->post('tipeb1_satuan');
           $data['tipeb1_sumber'] = $this->input->post('tipeb1_sumber');
           $data['tipeb1_file'] = $this->input->post('tipeb1_file');
         //call function
         $this->M_tipeb1->edit($data);
         //redirect to page

        }
           redirect('tipeb1'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/tipeb1/'.$this->input->post('tipeb1_file'));
            $this->M_tipeb1->delete($this->input->post('tipeb1_id'));
        redirect('tipeb1');

    }
}
?>
