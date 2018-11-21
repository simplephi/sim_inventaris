<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Angkutanbarang4 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_angkutanbarang4");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['angkutanbarang4']=$this->M_angkutanbarang4->tampil_data_angkutanbarang4();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("angkutanbarang4",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/angkutanbarang4/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['angkutanbarang4_file']['name'])
        {
            if ($this->upload->do_upload('angkutanbarang4_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'angkutanbarang4_file' =>$gbr['file_name'],
                  'angkutanbarang4_name' =>$this->input->post('angkutanbarang4_name'),
          'angkutanbarang4_input' =>$this->input->post('angkutanbarang4_input'),
          'angkutanbarang4_verifikasi' =>$this->input->post('angkutanbarang4_verifikasi'),
          'angkutanbarang4_satuan' =>$this->input->post('angkutanbarang4_satuan'),
          'angkutanbarang4_sumber' =>$this->input->post('angkutanbarang4_sumber'),
                    );
                $this->M_angkutanbarang4->input($data);
            }
        }

        else
        {
        $data['angkutanbarang4_name'] = $this->input->post('angkutanbarang4_name');
        $data['angkutanbarang4_input'] = $this->input->post('angkutanbarang4_input');
        $data['angkutanbarang4_verifikasi'] = $this->input->post('angkutanbarang4_verifikasi');
        $data['angkutanbarang4_satuan'] = $this->input->post('angkutanbarang4_satuan');
        $data['angkutanbarang4_sumber'] = $this->input->post('angkutanbarang4_sumber');
        $data['angkutanbarang4_file'] = $this->input->post('angkutanbarang4_file');

        //call function
        $this->M_angkutanbarang4->input($data);
        //redirect to page

      }
          redirect('angkutanbarang4'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/angkutanbarang4/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['angkutanbarang4_file']['name'])
         {
          unlink('./assets/angkutanbarang4/'.$this->input->post('angkutanbarang4_file'));
             if ($this->upload->do_upload('angkutanbarang4_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'angkutanbarang4_id' =>$this->input->post('angkutanbarang4_id'),
        'angkutanbarang4_file' =>$gbr['file_name'],
                 'angkutanbarang4_name' =>$this->input->post('angkutanbarang4_name'),
                 'angkutanbarang4_input' =>$this->input->post('angkutanbarang4_input'),
                 'angkutanbarang4_verifikasi' =>$this->input->post('angkutanbarang4_verifikasi'),
                 'angkutanbarang4_satuan' =>$this->input->post('angkutanbarang4_satuan'),
                 'angkutanbarang4_sumber' =>$this->input->post('angkutanbarang4_sumber'),
                     );
                 $this->M_angkutanbarang4->edit($data);
             }
         }

         else
         {
           $data['angkutanbarang4_id'] = $this->input->post('angkutanbarang4_id');
           $data['angkutanbarang4_name'] = $this->input->post('angkutanbarang4_name');
           $data['angkutanbarang4_input'] = $this->input->post('angkutanbarang4_input');
           $data['angkutanbarang4_verifikasi'] = $this->input->post('angkutanbarang4_verifikasi');
           $data['angkutanbarang4_satuan'] = $this->input->post('angkutanbarang4_satuan');
           $data['angkutanbarang4_sumber'] = $this->input->post('angkutanbarang4_sumber');
           $data['angkutanbarang4_file'] = $this->input->post('angkutanbarang4_file');
         //call function
         $this->M_angkutanbarang4->edit($data);
         //redirect to page

        }
           redirect('angkutanbarang4'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/angkutanbarang4/'.$this->input->post('angkutanbarang4_file'));
            $this->M_angkutanbarang4->delete($this->input->post('angkutanbarang4_id'));
        redirect('angkutanbarang4');

    }
}
?>
