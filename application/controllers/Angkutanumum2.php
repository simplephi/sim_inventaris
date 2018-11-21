<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Angkutanumum2 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_angkutanumum2");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['angkutanumum2']=$this->M_angkutanumum2->tampil_data_angkutanumum2();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("angkutanumum2",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/angkutanumum2/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['angkutanumum2_file']['name'])
        {
            if ($this->upload->do_upload('angkutanumum2_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'angkutanumum2_file' =>$gbr['file_name'],
                  'angkutanumum2_name' =>$this->input->post('angkutanumum2_name'),
          'angkutanumum2_input' =>$this->input->post('angkutanumum2_input'),
          'angkutanumum2_verifikasi' =>$this->input->post('angkutanumum2_verifikasi'),
          'angkutanumum2_satuan' =>$this->input->post('angkutanumum2_satuan'),
          'angkutanumum2_sumber' =>$this->input->post('angkutanumum2_sumber'),
                    );
                $this->M_angkutanumum2->input($data);
            }
        }

        else
        {
        $data['angkutanumum2_name'] = $this->input->post('angkutanumum2_name');
        $data['angkutanumum2_input'] = $this->input->post('angkutanumum2_input');
        $data['angkutanumum2_verifikasi'] = $this->input->post('angkutanumum2_verifikasi');
        $data['angkutanumum2_satuan'] = $this->input->post('angkutanumum2_satuan');
        $data['angkutanumum2_sumber'] = $this->input->post('angkutanumum2_sumber');
        $data['angkutanumum2_file'] = $this->input->post('angkutanumum2_file');

        //call function
        $this->M_angkutanumum2->input($data);
        //redirect to page

      }
          redirect('angkutanumum2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/angkutanumum2/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['angkutanumum2_file']['name'])
         {
          unlink('./assets/angkutanumum2/'.$this->input->post('angkutanumum2_file'));
             if ($this->upload->do_upload('angkutanumum2_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'angkutanumum2_id' =>$this->input->post('angkutanumum2_id'),
        'angkutanumum2_file' =>$gbr['file_name'],
                 'angkutanumum2_name' =>$this->input->post('angkutanumum2_name'),
                 'angkutanumum2_input' =>$this->input->post('angkutanumum2_input'),
                 'angkutanumum2_verifikasi' =>$this->input->post('angkutanumum2_verifikasi'),
                 'angkutanumum2_satuan' =>$this->input->post('angkutanumum2_satuan'),
                 'angkutanumum2_sumber' =>$this->input->post('angkutanumum2_sumber'),
                     );
                 $this->M_angkutanumum2->edit($data);
             }
         }

         else
         {
           $data['angkutanumum2_id'] = $this->input->post('angkutanumum2_id');
           $data['angkutanumum2_name'] = $this->input->post('angkutanumum2_name');
           $data['angkutanumum2_input'] = $this->input->post('angkutanumum2_input');
           $data['angkutanumum2_verifikasi'] = $this->input->post('angkutanumum2_verifikasi');
           $data['angkutanumum2_satuan'] = $this->input->post('angkutanumum2_satuan');
           $data['angkutanumum2_sumber'] = $this->input->post('angkutanumum2_sumber');
           $data['angkutanumum2_file'] = $this->input->post('angkutanumum2_file');
         //call function
         $this->M_angkutanumum2->edit($data);
         //redirect to page

        }
           redirect('angkutanumum2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/angkutanumum2/'.$this->input->post('angkutanumum2_file'));
            $this->M_angkutanumum2->delete($this->input->post('angkutanumum2_id'));
        redirect('angkutanumum2');

    }
}
?>
