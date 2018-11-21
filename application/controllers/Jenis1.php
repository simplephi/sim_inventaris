<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Jenis1 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_jenis1");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['jenis1']=$this->M_jenis1->tampil_data_jenis1();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("jenis1",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/jenis1/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['jenis1_file']['name'])
        {
            if ($this->upload->do_upload('jenis1_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'jenis1_file' =>$gbr['file_name'],
                  'jenis1_name' =>$this->input->post('jenis1_name'),
          'jenis1_input' =>$this->input->post('jenis1_input'),
          'jenis1_verifikasi' =>$this->input->post('jenis1_verifikasi'),
          'jenis1_satuan' =>$this->input->post('jenis1_satuan'),
          'jenis1_sumber' =>$this->input->post('jenis1_sumber'),
                    );
                $this->M_jenis1->input($data);
            }
        }

        else
        {
        $data['jenis1_name'] = $this->input->post('jenis1_name');
        $data['jenis1_input'] = $this->input->post('jenis1_input');
        $data['jenis1_verifikasi'] = $this->input->post('jenis1_verifikasi');
        $data['jenis1_satuan'] = $this->input->post('jenis1_satuan');
        $data['jenis1_sumber'] = $this->input->post('jenis1_sumber');
        $data['jenis1_file'] = $this->input->post('jenis1_file');

        //call function
        $this->M_jenis1->input($data);
        //redirect to page

      }
          redirect('jenis1'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/jenis1/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['jenis1_file']['name'])
         {
          unlink('./assets/jenis1/'.$this->input->post('jenis1_file'));
             if ($this->upload->do_upload('jenis1_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'jenis1_id' =>$this->input->post('jenis1_id'),
        'jenis1_file' =>$gbr['file_name'],
                 'jenis1_name' =>$this->input->post('jenis1_name'),
                 'jenis1_input' =>$this->input->post('jenis1_input'),
                 'jenis1_verifikasi' =>$this->input->post('jenis1_verifikasi'),
                 'jenis1_satuan' =>$this->input->post('jenis1_satuan'),
                 'jenis1_sumber' =>$this->input->post('jenis1_sumber'),
                     );
                 $this->M_jenis1->edit($data);
             }
         }

         else
         {
           $data['jenis1_id'] = $this->input->post('jenis1_id');
           $data['jenis1_name'] = $this->input->post('jenis1_name');
           $data['jenis1_input'] = $this->input->post('jenis1_input');
           $data['jenis1_verifikasi'] = $this->input->post('jenis1_verifikasi');
           $data['jenis1_satuan'] = $this->input->post('jenis1_satuan');
           $data['jenis1_sumber'] = $this->input->post('jenis1_sumber');
           $data['jenis1_file'] = $this->input->post('jenis1_file');
         //call function
         $this->M_jenis1->edit($data);
         //redirect to page

        }
           redirect('jenis1'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/jenis1/'.$this->input->post('jenis1_file'));
            $this->M_jenis1->delete($this->input->post('jenis1_id'));
        redirect('jenis1');

    }
}
?>
