<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Jembatan2 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_jembatan2");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['jembatan2']=$this->M_jembatan2->tampil_data_jembatan2();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("jembatan2",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/jembatan2/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['jembatan2_file']['name'])
        {
            if ($this->upload->do_upload('jembatan2_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'jembatan2_file' =>$gbr['file_name'],
                  'jembatan2_name' =>$this->input->post('jembatan2_name'),
          'jembatan2_input' =>$this->input->post('jembatan2_input'),
          'jembatan2_verifikasi' =>$this->input->post('jembatan2_verifikasi'),
          'jembatan2_satuan' =>$this->input->post('jembatan2_satuan'),
          'jembatan2_sumber' =>$this->input->post('jembatan2_sumber'),
                    );
                $this->M_jembatan2->input($data);
            }
        }

        else
        {
        $data['jembatan2_name'] = $this->input->post('jembatan2_name');
        $data['jembatan2_input'] = $this->input->post('jembatan2_input');
        $data['jembatan2_verifikasi'] = $this->input->post('jembatan2_verifikasi');
        $data['jembatan2_satuan'] = $this->input->post('jembatan2_satuan');
        $data['jembatan2_sumber'] = $this->input->post('jembatan2_sumber');
        $data['jembatan2_file'] = $this->input->post('jembatan2_file');

        //call function
        $this->M_jembatan2->input($data);
        //redirect to page

      }
          redirect('jembatan2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/jembatan2/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['jembatan2_file']['name'])
         {
          unlink('./assets/jembatan2/'.$this->input->post('jembatan2_file'));
             if ($this->upload->do_upload('jembatan2_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'jembatan2_id' =>$this->input->post('jembatan2_id'),
        'jembatan2_file' =>$gbr['file_name'],
                 'jembatan2_name' =>$this->input->post('jembatan2_name'),
                 'jembatan2_input' =>$this->input->post('jembatan2_input'),
                 'jembatan2_verifikasi' =>$this->input->post('jembatan2_verifikasi'),
                 'jembatan2_satuan' =>$this->input->post('jembatan2_satuan'),
                 'jembatan2_sumber' =>$this->input->post('jembatan2_sumber'),
                     );
                 $this->M_jembatan2->edit($data);
             }
         }

         else
         {
           $data['jembatan2_id'] = $this->input->post('jembatan2_id');
           $data['jembatan2_name'] = $this->input->post('jembatan2_name');
           $data['jembatan2_input'] = $this->input->post('jembatan2_input');
           $data['jembatan2_verifikasi'] = $this->input->post('jembatan2_verifikasi');
           $data['jembatan2_satuan'] = $this->input->post('jembatan2_satuan');
           $data['jembatan2_sumber'] = $this->input->post('jembatan2_sumber');
           $data['jembatan2_file'] = $this->input->post('jembatan2_file');
         //call function
         $this->M_jembatan2->edit($data);
         //redirect to page

        }
           redirect('jembatan2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/jembatan2/'.$this->input->post('jembatan2_file'));
            $this->M_jembatan2->delete($this->input->post('jembatan2_id'));
        redirect('jembatan2');

    }
}
?>
