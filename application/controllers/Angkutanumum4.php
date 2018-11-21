<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Angkutanumum4 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_angkutanumum4");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['angkutanumum4']=$this->M_angkutanumum4->tampil_data_angkutanumum4();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("angkutanumum4",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/angkutanumum4/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['angkutanumum4_file']['name'])
        {
            if ($this->upload->do_upload('angkutanumum4_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'angkutanumum4_file' =>$gbr['file_name'],
                  'angkutanumum4_name' =>$this->input->post('angkutanumum4_name'),
          'angkutanumum4_input' =>$this->input->post('angkutanumum4_input'),
          'angkutanumum4_verifikasi' =>$this->input->post('angkutanumum4_verifikasi'),
          'angkutanumum4_satuan' =>$this->input->post('angkutanumum4_satuan'),
          'angkutanumum4_sumber' =>$this->input->post('angkutanumum4_sumber'),
                    );
                $this->M_angkutanumum4->input($data);
            }
        }

        else
        {
        $data['angkutanumum4_name'] = $this->input->post('angkutanumum4_name');
        $data['angkutanumum4_input'] = $this->input->post('angkutanumum4_input');
        $data['angkutanumum4_verifikasi'] = $this->input->post('angkutanumum4_verifikasi');
        $data['angkutanumum4_satuan'] = $this->input->post('angkutanumum4_satuan');
        $data['angkutanumum4_sumber'] = $this->input->post('angkutanumum4_sumber');
        $data['angkutanumum4_file'] = $this->input->post('angkutanumum4_file');

        //call function
        $this->M_angkutanumum4->input($data);
        //redirect to page

      }
          redirect('angkutanumum4'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/angkutanumum4/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['angkutanumum4_file']['name'])
         {
          unlink('./assets/angkutanumum4/'.$this->input->post('angkutanumum4_file'));
             if ($this->upload->do_upload('angkutanumum4_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'angkutanumum4_id' =>$this->input->post('angkutanumum4_id'),
        'angkutanumum4_file' =>$gbr['file_name'],
                 'angkutanumum4_name' =>$this->input->post('angkutanumum4_name'),
                 'angkutanumum4_input' =>$this->input->post('angkutanumum4_input'),
                 'angkutanumum4_verifikasi' =>$this->input->post('angkutanumum4_verifikasi'),
                 'angkutanumum4_satuan' =>$this->input->post('angkutanumum4_satuan'),
                 'angkutanumum4_sumber' =>$this->input->post('angkutanumum4_sumber'),
                     );
                 $this->M_angkutanumum4->edit($data);
             }
         }

         else
         {
           $data['angkutanumum4_id'] = $this->input->post('angkutanumum4_id');
           $data['angkutanumum4_name'] = $this->input->post('angkutanumum4_name');
           $data['angkutanumum4_input'] = $this->input->post('angkutanumum4_input');
           $data['angkutanumum4_verifikasi'] = $this->input->post('angkutanumum4_verifikasi');
           $data['angkutanumum4_satuan'] = $this->input->post('angkutanumum4_satuan');
           $data['angkutanumum4_sumber'] = $this->input->post('angkutanumum4_sumber');
           $data['angkutanumum4_file'] = $this->input->post('angkutanumum4_file');
         //call function
         $this->M_angkutanumum4->edit($data);
         //redirect to page

        }
           redirect('angkutanumum4'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/angkutanumum4/'.$this->input->post('angkutanumum4_file'));
            $this->M_angkutanumum4->delete($this->input->post('angkutanumum4_id'));
        redirect('angkutanumum4');

    }
}
?>
