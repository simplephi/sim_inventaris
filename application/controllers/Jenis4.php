<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Jenis4 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_jenis4");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['jenis4']=$this->M_jenis4->tampil_data_jenis4();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("jenis4",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/jenis4/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['jenis4_file']['name'])
        {
            if ($this->upload->do_upload('jenis4_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'jenis4_file' =>$gbr['file_name'],
                  'jenis4_name' =>$this->input->post('jenis4_name'),
          'jenis4_input' =>$this->input->post('jenis4_input'),
          'jenis4_verifikasi' =>$this->input->post('jenis4_verifikasi'),
          'jenis4_satuan' =>$this->input->post('jenis4_satuan'),
          'jenis4_sumber' =>$this->input->post('jenis4_sumber'),
                    );
                $this->M_jenis4->input($data);
            }
        }

        else
        {
        $data['jenis4_name'] = $this->input->post('jenis4_name');
        $data['jenis4_input'] = $this->input->post('jenis4_input');
        $data['jenis4_verifikasi'] = $this->input->post('jenis4_verifikasi');
        $data['jenis4_satuan'] = $this->input->post('jenis4_satuan');
        $data['jenis4_sumber'] = $this->input->post('jenis4_sumber');
        $data['jenis4_file'] = $this->input->post('jenis4_file');

        //call function
        $this->M_jenis4->input($data);
        //redirect to page

      }
          redirect('jenis4'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/jenis4/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['jenis4_file']['name'])
         {
          unlink('./assets/jenis4/'.$this->input->post('jenis4_file'));
             if ($this->upload->do_upload('jenis4_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'jenis4_id' =>$this->input->post('jenis4_id'),
        'jenis4_file' =>$gbr['file_name'],
                 'jenis4_name' =>$this->input->post('jenis4_name'),
                 'jenis4_input' =>$this->input->post('jenis4_input'),
                 'jenis4_verifikasi' =>$this->input->post('jenis4_verifikasi'),
                 'jenis4_satuan' =>$this->input->post('jenis4_satuan'),
                 'jenis4_sumber' =>$this->input->post('jenis4_sumber'),
                     );
                 $this->M_jenis4->edit($data);
             }
         }

         else
         {
           $data['jenis4_id'] = $this->input->post('jenis4_id');
           $data['jenis4_name'] = $this->input->post('jenis4_name');
           $data['jenis4_input'] = $this->input->post('jenis4_input');
           $data['jenis4_verifikasi'] = $this->input->post('jenis4_verifikasi');
           $data['jenis4_satuan'] = $this->input->post('jenis4_satuan');
           $data['jenis4_sumber'] = $this->input->post('jenis4_sumber');
           $data['jenis4_file'] = $this->input->post('jenis4_file');
         //call function
         $this->M_jenis4->edit($data);
         //redirect to page

        }
           redirect('jenis4'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/jenis4/'.$this->input->post('jenis4_file'));
            $this->M_jenis4->delete($this->input->post('jenis4_id'));
        redirect('jenis4');

    }
}
?>
