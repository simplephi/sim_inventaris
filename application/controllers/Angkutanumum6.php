<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Angkutanumum6 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_angkutanumum6");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['angkutanumum6']=$this->M_angkutanumum6->tampil_data_angkutanumum6();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("angkutanumum6",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/angkutanumum6/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['angkutanumum6_file']['name'])
        {
            if ($this->upload->do_upload('angkutanumum6_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'angkutanumum6_file' =>$gbr['file_name'],
                  'angkutanumum6_name' =>$this->input->post('angkutanumum6_name'),
          'angkutanumum6_input' =>$this->input->post('angkutanumum6_input'),
          'angkutanumum6_verifikasi' =>$this->input->post('angkutanumum6_verifikasi'),
          'angkutanumum6_satuan' =>$this->input->post('angkutanumum6_satuan'),
          'angkutanumum6_sumber' =>$this->input->post('angkutanumum6_sumber'),
                    );
                $this->M_angkutanumum6->input($data);
            }
        }

        else
        {
        $data['angkutanumum6_name'] = $this->input->post('angkutanumum6_name');
        $data['angkutanumum6_input'] = $this->input->post('angkutanumum6_input');
        $data['angkutanumum6_verifikasi'] = $this->input->post('angkutanumum6_verifikasi');
        $data['angkutanumum6_satuan'] = $this->input->post('angkutanumum6_satuan');
        $data['angkutanumum6_sumber'] = $this->input->post('angkutanumum6_sumber');
        $data['angkutanumum6_file'] = $this->input->post('angkutanumum6_file');

        //call function
        $this->M_angkutanumum6->input($data);
        //redirect to page

      }
          redirect('angkutanumum6'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/angkutanumum6/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['angkutanumum6_file']['name'])
         {
          unlink('./assets/angkutanumum6/'.$this->input->post('angkutanumum6_file'));
             if ($this->upload->do_upload('angkutanumum6_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'angkutanumum6_id' =>$this->input->post('angkutanumum6_id'),
        'angkutanumum6_file' =>$gbr['file_name'],
                 'angkutanumum6_name' =>$this->input->post('angkutanumum6_name'),
                 'angkutanumum6_input' =>$this->input->post('angkutanumum6_input'),
                 'angkutanumum6_verifikasi' =>$this->input->post('angkutanumum6_verifikasi'),
                 'angkutanumum6_satuan' =>$this->input->post('angkutanumum6_satuan'),
                 'angkutanumum6_sumber' =>$this->input->post('angkutanumum6_sumber'),
                     );
                 $this->M_angkutanumum6->edit($data);
             }
         }

         else
         {
           $data['angkutanumum6_id'] = $this->input->post('angkutanumum6_id');
           $data['angkutanumum6_name'] = $this->input->post('angkutanumum6_name');
           $data['angkutanumum6_input'] = $this->input->post('angkutanumum6_input');
           $data['angkutanumum6_verifikasi'] = $this->input->post('angkutanumum6_verifikasi');
           $data['angkutanumum6_satuan'] = $this->input->post('angkutanumum6_satuan');
           $data['angkutanumum6_sumber'] = $this->input->post('angkutanumum6_sumber');
           $data['angkutanumum6_file'] = $this->input->post('angkutanumum6_file');
         //call function
         $this->M_angkutanumum6->edit($data);
         //redirect to page

        }
           redirect('angkutanumum6'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/angkutanumum6/'.$this->input->post('angkutanumum6_file'));
            $this->M_angkutanumum6->delete($this->input->post('angkutanumum6_id'));
        redirect('angkutanumum6');

    }
}
?>
