<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Angkutanumum5 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_angkutanumum5");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['angkutanumum5']=$this->M_angkutanumum5->tampil_data_angkutanumum5();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("angkutanumum5",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/angkutanumum5/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['angkutanumum5_file']['name'])
        {
            if ($this->upload->do_upload('angkutanumum5_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'angkutanumum5_file' =>$gbr['file_name'],
                  'angkutanumum5_name' =>$this->input->post('angkutanumum5_name'),
          'angkutanumum5_input' =>$this->input->post('angkutanumum5_input'),
          'angkutanumum5_verifikasi' =>$this->input->post('angkutanumum5_verifikasi'),
          'angkutanumum5_satuan' =>$this->input->post('angkutanumum5_satuan'),
          'angkutanumum5_sumber' =>$this->input->post('angkutanumum5_sumber'),
                    );
                $this->M_angkutanumum5->input($data);
            }
        }

        else
        {
        $data['angkutanumum5_name'] = $this->input->post('angkutanumum5_name');
        $data['angkutanumum5_input'] = $this->input->post('angkutanumum5_input');
        $data['angkutanumum5_verifikasi'] = $this->input->post('angkutanumum5_verifikasi');
        $data['angkutanumum5_satuan'] = $this->input->post('angkutanumum5_satuan');
        $data['angkutanumum5_sumber'] = $this->input->post('angkutanumum5_sumber');
        $data['angkutanumum5_file'] = $this->input->post('angkutanumum5_file');

        //call function
        $this->M_angkutanumum5->input($data);
        //redirect to page

      }
          redirect('angkutanumum5'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/angkutanumum5/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['angkutanumum5_file']['name'])
         {
          unlink('./assets/angkutanumum5/'.$this->input->post('angkutanumum5_file'));
             if ($this->upload->do_upload('angkutanumum5_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'angkutanumum5_id' =>$this->input->post('angkutanumum5_id'),
        'angkutanumum5_file' =>$gbr['file_name'],
                 'angkutanumum5_name' =>$this->input->post('angkutanumum5_name'),
                 'angkutanumum5_input' =>$this->input->post('angkutanumum5_input'),
                 'angkutanumum5_verifikasi' =>$this->input->post('angkutanumum5_verifikasi'),
                 'angkutanumum5_satuan' =>$this->input->post('angkutanumum5_satuan'),
                 'angkutanumum5_sumber' =>$this->input->post('angkutanumum5_sumber'),
                     );
                 $this->M_angkutanumum5->edit($data);
             }
         }

         else
         {
           $data['angkutanumum5_id'] = $this->input->post('angkutanumum5_id');
           $data['angkutanumum5_name'] = $this->input->post('angkutanumum5_name');
           $data['angkutanumum5_input'] = $this->input->post('angkutanumum5_input');
           $data['angkutanumum5_verifikasi'] = $this->input->post('angkutanumum5_verifikasi');
           $data['angkutanumum5_satuan'] = $this->input->post('angkutanumum5_satuan');
           $data['angkutanumum5_sumber'] = $this->input->post('angkutanumum5_sumber');
           $data['angkutanumum5_file'] = $this->input->post('angkutanumum5_file');
         //call function
         $this->M_angkutanumum5->edit($data);
         //redirect to page

        }
           redirect('angkutanumum5'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/angkutanumum5/'.$this->input->post('angkutanumum5_file'));
            $this->M_angkutanumum5->delete($this->input->post('angkutanumum5_id'));
        redirect('angkutanumum5');

    }
}
?>
