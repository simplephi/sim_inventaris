<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Angkutanumum7 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_angkutanumum7");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['angkutanumum7']=$this->M_angkutanumum7->tampil_data_angkutanumum7();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("angkutanumum7",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/angkutanumum7/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['angkutanumum7_file']['name'])
        {
            if ($this->upload->do_upload('angkutanumum7_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'angkutanumum7_file' =>$gbr['file_name'],
                  'angkutanumum7_name' =>$this->input->post('angkutanumum7_name'),
          'angkutanumum7_input' =>$this->input->post('angkutanumum7_input'),
          'angkutanumum7_verifikasi' =>$this->input->post('angkutanumum7_verifikasi'),
          'angkutanumum7_satuan' =>$this->input->post('angkutanumum7_satuan'),
          'angkutanumum7_sumber' =>$this->input->post('angkutanumum7_sumber'),
                    );
                $this->M_angkutanumum7->input($data);
            }
        }

        else
        {
        $data['angkutanumum7_name'] = $this->input->post('angkutanumum7_name');
        $data['angkutanumum7_input'] = $this->input->post('angkutanumum7_input');
        $data['angkutanumum7_verifikasi'] = $this->input->post('angkutanumum7_verifikasi');
        $data['angkutanumum7_satuan'] = $this->input->post('angkutanumum7_satuan');
        $data['angkutanumum7_sumber'] = $this->input->post('angkutanumum7_sumber');
        $data['angkutanumum7_file'] = $this->input->post('angkutanumum7_file');

        //call function
        $this->M_angkutanumum7->input($data);
        //redirect to page

      }
          redirect('angkutanumum7'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/angkutanumum7/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['angkutanumum7_file']['name'])
         {
          unlink('./assets/angkutanumum7/'.$this->input->post('angkutanumum7_file'));
             if ($this->upload->do_upload('angkutanumum7_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'angkutanumum7_id' =>$this->input->post('angkutanumum7_id'),
        'angkutanumum7_file' =>$gbr['file_name'],
                 'angkutanumum7_name' =>$this->input->post('angkutanumum7_name'),
                 'angkutanumum7_input' =>$this->input->post('angkutanumum7_input'),
                 'angkutanumum7_verifikasi' =>$this->input->post('angkutanumum7_verifikasi'),
                 'angkutanumum7_satuan' =>$this->input->post('angkutanumum7_satuan'),
                 'angkutanumum7_sumber' =>$this->input->post('angkutanumum7_sumber'),
                     );
                 $this->M_angkutanumum7->edit($data);
             }
         }

         else
         {
           $data['angkutanumum7_id'] = $this->input->post('angkutanumum7_id');
           $data['angkutanumum7_name'] = $this->input->post('angkutanumum7_name');
           $data['angkutanumum7_input'] = $this->input->post('angkutanumum7_input');
           $data['angkutanumum7_verifikasi'] = $this->input->post('angkutanumum7_verifikasi');
           $data['angkutanumum7_satuan'] = $this->input->post('angkutanumum7_satuan');
           $data['angkutanumum7_sumber'] = $this->input->post('angkutanumum7_sumber');
           $data['angkutanumum7_file'] = $this->input->post('angkutanumum7_file');
         //call function
         $this->M_angkutanumum7->edit($data);
         //redirect to page

        }
           redirect('angkutanumum7'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/angkutanumum7/'.$this->input->post('angkutanumum7_file'));
            $this->M_angkutanumum7->delete($this->input->post('angkutanumum7_id'));
        redirect('angkutanumum7');

    }
}
?>
