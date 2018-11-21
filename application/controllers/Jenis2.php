<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Jenis2 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_jenis2");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['jenis2']=$this->M_jenis2->tampil_data_jenis2();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("jenis2",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/jenis2/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['jenis2_file']['name'])
        {
            if ($this->upload->do_upload('jenis2_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'jenis2_file' =>$gbr['file_name'],
                  'jenis2_name' =>$this->input->post('jenis2_name'),
          'jenis2_input' =>$this->input->post('jenis2_input'),
          'jenis2_verifikasi' =>$this->input->post('jenis2_verifikasi'),
          'jenis2_satuan' =>$this->input->post('jenis2_satuan'),
          'jenis2_sumber' =>$this->input->post('jenis2_sumber'),
                    );
                $this->M_jenis2->input($data);
            }
        }

        else
        {
        $data['jenis2_name'] = $this->input->post('jenis2_name');
        $data['jenis2_input'] = $this->input->post('jenis2_input');
        $data['jenis2_verifikasi'] = $this->input->post('jenis2_verifikasi');
        $data['jenis2_satuan'] = $this->input->post('jenis2_satuan');
        $data['jenis2_sumber'] = $this->input->post('jenis2_sumber');
        $data['jenis2_file'] = $this->input->post('jenis2_file');

        //call function
        $this->M_jenis2->input($data);
        //redirect to page

      }
          redirect('jenis2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/jenis2/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['jenis2_file']['name'])
         {
          unlink('./assets/jenis2/'.$this->input->post('jenis2_file'));
             if ($this->upload->do_upload('jenis2_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'jenis2_id' =>$this->input->post('jenis2_id'),
        'jenis2_file' =>$gbr['file_name'],
                 'jenis2_name' =>$this->input->post('jenis2_name'),
                 'jenis2_input' =>$this->input->post('jenis2_input'),
                 'jenis2_verifikasi' =>$this->input->post('jenis2_verifikasi'),
                 'jenis2_satuan' =>$this->input->post('jenis2_satuan'),
                 'jenis2_sumber' =>$this->input->post('jenis2_sumber'),
                     );
                 $this->M_jenis2->edit($data);
             }
         }

         else
         {
           $data['jenis2_id'] = $this->input->post('jenis2_id');
           $data['jenis2_name'] = $this->input->post('jenis2_name');
           $data['jenis2_input'] = $this->input->post('jenis2_input');
           $data['jenis2_verifikasi'] = $this->input->post('jenis2_verifikasi');
           $data['jenis2_satuan'] = $this->input->post('jenis2_satuan');
           $data['jenis2_sumber'] = $this->input->post('jenis2_sumber');
           $data['jenis2_file'] = $this->input->post('jenis2_file');
         //call function
         $this->M_jenis2->edit($data);
         //redirect to page

        }
           redirect('jenis2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/jenis2/'.$this->input->post('jenis2_file'));
            $this->M_jenis2->delete($this->input->post('jenis2_id'));
        redirect('jenis2');

    }
}
?>
