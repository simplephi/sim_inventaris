<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Angkutanbarang2 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_angkutanbarang2");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['angkutanbarang2']=$this->M_angkutanbarang2->tampil_data_angkutanbarang2();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("angkutanbarang2",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/angkutanbarang2/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['angkutanbarang2_file']['name'])
        {
            if ($this->upload->do_upload('angkutanbarang2_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'angkutanbarang2_file' =>$gbr['file_name'],
                  'angkutanbarang2_name' =>$this->input->post('angkutanbarang2_name'),
          'angkutanbarang2_input' =>$this->input->post('angkutanbarang2_input'),
          'angkutanbarang2_verifikasi' =>$this->input->post('angkutanbarang2_verifikasi'),
          'angkutanbarang2_satuan' =>$this->input->post('angkutanbarang2_satuan'),
          'angkutanbarang2_sumber' =>$this->input->post('angkutanbarang2_sumber'),
                    );
                $this->M_angkutanbarang2->input($data);
            }
        }

        else
        {
        $data['angkutanbarang2_name'] = $this->input->post('angkutanbarang2_name');
        $data['angkutanbarang2_input'] = $this->input->post('angkutanbarang2_input');
        $data['angkutanbarang2_verifikasi'] = $this->input->post('angkutanbarang2_verifikasi');
        $data['angkutanbarang2_satuan'] = $this->input->post('angkutanbarang2_satuan');
        $data['angkutanbarang2_sumber'] = $this->input->post('angkutanbarang2_sumber');
        $data['angkutanbarang2_file'] = $this->input->post('angkutanbarang2_file');

        //call function
        $this->M_angkutanbarang2->input($data);
        //redirect to page

      }
          redirect('angkutanbarang2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/angkutanbarang2/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['angkutanbarang2_file']['name'])
         {
          unlink('./assets/angkutanbarang2/'.$this->input->post('angkutanbarang2_file'));
             if ($this->upload->do_upload('angkutanbarang2_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'angkutanbarang2_id' =>$this->input->post('angkutanbarang2_id'),
        'angkutanbarang2_file' =>$gbr['file_name'],
                 'angkutanbarang2_name' =>$this->input->post('angkutanbarang2_name'),
                 'angkutanbarang2_input' =>$this->input->post('angkutanbarang2_input'),
                 'angkutanbarang2_verifikasi' =>$this->input->post('angkutanbarang2_verifikasi'),
                 'angkutanbarang2_satuan' =>$this->input->post('angkutanbarang2_satuan'),
                 'angkutanbarang2_sumber' =>$this->input->post('angkutanbarang2_sumber'),
                     );
                 $this->M_angkutanbarang2->edit($data);
             }
         }

         else
         {
           $data['angkutanbarang2_id'] = $this->input->post('angkutanbarang2_id');
           $data['angkutanbarang2_name'] = $this->input->post('angkutanbarang2_name');
           $data['angkutanbarang2_input'] = $this->input->post('angkutanbarang2_input');
           $data['angkutanbarang2_verifikasi'] = $this->input->post('angkutanbarang2_verifikasi');
           $data['angkutanbarang2_satuan'] = $this->input->post('angkutanbarang2_satuan');
           $data['angkutanbarang2_sumber'] = $this->input->post('angkutanbarang2_sumber');
           $data['angkutanbarang2_file'] = $this->input->post('angkutanbarang2_file');
         //call function
         $this->M_angkutanbarang2->edit($data);
         //redirect to page

        }
           redirect('angkutanbarang2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/angkutanbarang2/'.$this->input->post('angkutanbarang2_file'));
            $this->M_angkutanbarang2->delete($this->input->post('angkutanbarang2_id'));
        redirect('angkutanbarang2');

    }
}
?>
  