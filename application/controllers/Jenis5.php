<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Jenis5 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_jenis5");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['jenis5']=$this->M_jenis5->tampil_data_jenis5();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("jenis5",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/jenis5/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['jenis5_file']['name'])
        {
            if ($this->upload->do_upload('jenis5_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'jenis5_file' =>$gbr['file_name'],
                  'jenis5_name' =>$this->input->post('jenis5_name'),
          'jenis5_input' =>$this->input->post('jenis5_input'),
          'jenis5_verifikasi' =>$this->input->post('jenis5_verifikasi'),
          'jenis5_satuan' =>$this->input->post('jenis5_satuan'),
          'jenis5_sumber' =>$this->input->post('jenis5_sumber'),
                    );
                $this->M_jenis5->input($data);
            }
        }

        else
        {
        $data['jenis5_name'] = $this->input->post('jenis5_name');
        $data['jenis5_input'] = $this->input->post('jenis5_input');
        $data['jenis5_verifikasi'] = $this->input->post('jenis5_verifikasi');
        $data['jenis5_satuan'] = $this->input->post('jenis5_satuan');
        $data['jenis5_sumber'] = $this->input->post('jenis5_sumber');
        $data['jenis5_file'] = $this->input->post('jenis5_file');

        //call function
        $this->M_jenis5->input($data);
        //redirect to page

      }
          redirect('jenis5'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/jenis5/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['jenis5_file']['name'])
         {
          unlink('./assets/jenis5/'.$this->input->post('jenis5_file'));
             if ($this->upload->do_upload('jenis5_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'jenis5_id' =>$this->input->post('jenis5_id'),
        'jenis5_file' =>$gbr['file_name'],
                 'jenis5_name' =>$this->input->post('jenis5_name'),
                 'jenis5_input' =>$this->input->post('jenis5_input'),
                 'jenis5_verifikasi' =>$this->input->post('jenis5_verifikasi'),
                 'jenis5_satuan' =>$this->input->post('jenis5_satuan'),
                 'jenis5_sumber' =>$this->input->post('jenis5_sumber'),
                     );
                 $this->M_jenis5->edit($data);
             }
         }

         else
         {
           $data['jenis5_id'] = $this->input->post('jenis5_id');
           $data['jenis5_name'] = $this->input->post('jenis5_name');
           $data['jenis5_input'] = $this->input->post('jenis5_input');
           $data['jenis5_verifikasi'] = $this->input->post('jenis5_verifikasi');
           $data['jenis5_satuan'] = $this->input->post('jenis5_satuan');
           $data['jenis5_sumber'] = $this->input->post('jenis5_sumber');
           $data['jenis5_file'] = $this->input->post('jenis5_file');
         //call function
         $this->M_jenis5->edit($data);
         //redirect to page

        }
           redirect('jenis5'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/jenis5/'.$this->input->post('jenis5_file'));
            $this->M_jenis5->delete($this->input->post('jenis5_id'));
        redirect('jenis5');

    }
}
?>
