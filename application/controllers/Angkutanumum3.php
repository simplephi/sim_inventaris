<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Angkutanumum3 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_angkutanumum3");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['angkutanumum3']=$this->M_angkutanumum3->tampil_data_angkutanumum3();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("angkutanumum3",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/angkutanumum3/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['angkutanumum3_file']['name'])
        {
            if ($this->upload->do_upload('angkutanumum3_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'angkutanumum3_file' =>$gbr['file_name'],
                  'angkutanumum3_name' =>$this->input->post('angkutanumum3_name'),
          'angkutanumum3_input' =>$this->input->post('angkutanumum3_input'),
          'angkutanumum3_verifikasi' =>$this->input->post('angkutanumum3_verifikasi'),
          'angkutanumum3_satuan' =>$this->input->post('angkutanumum3_satuan'),
          'angkutanumum3_sumber' =>$this->input->post('angkutanumum3_sumber'),
                    );
                $this->M_angkutanumum3->input($data);
            }
        }

        else
        {
        $data['angkutanumum3_name'] = $this->input->post('angkutanumum3_name');
        $data['angkutanumum3_input'] = $this->input->post('angkutanumum3_input');
        $data['angkutanumum3_verifikasi'] = $this->input->post('angkutanumum3_verifikasi');
        $data['angkutanumum3_satuan'] = $this->input->post('angkutanumum3_satuan');
        $data['angkutanumum3_sumber'] = $this->input->post('angkutanumum3_sumber');
        $data['angkutanumum3_file'] = $this->input->post('angkutanumum3_file');

        //call function
        $this->M_angkutanumum3->input($data);
        //redirect to page

      }
          redirect('angkutanumum3'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/angkutanumum3/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['angkutanumum3_file']['name'])
         {
          unlink('./assets/angkutanumum3/'.$this->input->post('angkutanumum3_file'));
             if ($this->upload->do_upload('angkutanumum3_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'angkutanumum3_id' =>$this->input->post('angkutanumum3_id'),
        'angkutanumum3_file' =>$gbr['file_name'],
                 'angkutanumum3_name' =>$this->input->post('angkutanumum3_name'),
                 'angkutanumum3_input' =>$this->input->post('angkutanumum3_input'),
                 'angkutanumum3_verifikasi' =>$this->input->post('angkutanumum3_verifikasi'),
                 'angkutanumum3_satuan' =>$this->input->post('angkutanumum3_satuan'),
                 'angkutanumum3_sumber' =>$this->input->post('angkutanumum3_sumber'),
                     );
                 $this->M_angkutanumum3->edit($data);
             }
         }

         else
         {
           $data['angkutanumum3_id'] = $this->input->post('angkutanumum3_id');
           $data['angkutanumum3_name'] = $this->input->post('angkutanumum3_name');
           $data['angkutanumum3_input'] = $this->input->post('angkutanumum3_input');
           $data['angkutanumum3_verifikasi'] = $this->input->post('angkutanumum3_verifikasi');
           $data['angkutanumum3_satuan'] = $this->input->post('angkutanumum3_satuan');
           $data['angkutanumum3_sumber'] = $this->input->post('angkutanumum3_sumber');
           $data['angkutanumum3_file'] = $this->input->post('angkutanumum3_file');
         //call function
         $this->M_angkutanumum3->edit($data);
         //redirect to page

        }
           redirect('angkutanumum3'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/angkutanumum3/'.$this->input->post('angkutanumum3_file'));
            $this->M_angkutanumum3->delete($this->input->post('angkutanumum3_id'));
        redirect('angkutanumum3');

    }
}
?>
