<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kendaraanpribadi1 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_kendaraanpribadi1");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['kendaraanpribadi1']=$this->M_kendaraanpribadi1->tampil_data_kendaraanpribadi1();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("kendaraanpribadi1",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/kendaraanpribadi1/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['kendaraanpribadi1_file']['name'])
        {
            if ($this->upload->do_upload('kendaraanpribadi1_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'kendaraanpribadi1_file' =>$gbr['file_name'],
                  'kendaraanpribadi1_name' =>$this->input->post('kendaraanpribadi1_name'),
          'kendaraanpribadi1_input' =>$this->input->post('kendaraanpribadi1_input'),
          'kendaraanpribadi1_verifikasi' =>$this->input->post('kendaraanpribadi1_verifikasi'),
          'kendaraanpribadi1_satuan' =>$this->input->post('kendaraanpribadi1_satuan'),
          'kendaraanpribadi1_sumber' =>$this->input->post('kendaraanpribadi1_sumber'),
                    );
                $this->M_kendaraanpribadi1->input($data);
            }
        }

        else
        {
        $data['kendaraanpribadi1_name'] = $this->input->post('kendaraanpribadi1_name');
        $data['kendaraanpribadi1_input'] = $this->input->post('kendaraanpribadi1_input');
        $data['kendaraanpribadi1_verifikasi'] = $this->input->post('kendaraanpribadi1_verifikasi');
        $data['kendaraanpribadi1_satuan'] = $this->input->post('kendaraanpribadi1_satuan');
        $data['kendaraanpribadi1_sumber'] = $this->input->post('kendaraanpribadi1_sumber');
        $data['kendaraanpribadi1_file'] = $this->input->post('kendaraanpribadi1_file');

        //call function
        $this->M_kendaraanpribadi1->input($data);
        //redirect to page

      }
          redirect('kendaraanpribadi1'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/kendaraanpribadi1/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['kendaraanpribadi1_file']['name'])
         {
          unlink('./assets/kendaraanpribadi1/'.$this->input->post('kendaraanpribadi1_file'));
             if ($this->upload->do_upload('kendaraanpribadi1_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'kendaraanpribadi1_id' =>$this->input->post('kendaraanpribadi1_id'),
        'kendaraanpribadi1_file' =>$gbr['file_name'],
                 'kendaraanpribadi1_name' =>$this->input->post('kendaraanpribadi1_name'),
                 'kendaraanpribadi1_input' =>$this->input->post('kendaraanpribadi1_input'),
                 'kendaraanpribadi1_verifikasi' =>$this->input->post('kendaraanpribadi1_verifikasi'),
                 'kendaraanpribadi1_satuan' =>$this->input->post('kendaraanpribadi1_satuan'),
                 'kendaraanpribadi1_sumber' =>$this->input->post('kendaraanpribadi1_sumber'),
                     );
                 $this->M_kendaraanpribadi1->edit($data);
             }
         }

         else
         {
           $data['kendaraanpribadi1_id'] = $this->input->post('kendaraanpribadi1_id');
           $data['kendaraanpribadi1_name'] = $this->input->post('kendaraanpribadi1_name');
           $data['kendaraanpribadi1_input'] = $this->input->post('kendaraanpribadi1_input');
           $data['kendaraanpribadi1_verifikasi'] = $this->input->post('kendaraanpribadi1_verifikasi');
           $data['kendaraanpribadi1_satuan'] = $this->input->post('kendaraanpribadi1_satuan');
           $data['kendaraanpribadi1_sumber'] = $this->input->post('kendaraanpribadi1_sumber');
           $data['kendaraanpribadi1_file'] = $this->input->post('kendaraanpribadi1_file');
         //call function
         $this->M_kendaraanpribadi1->edit($data);
         //redirect to page

        }
           redirect('kendaraanpribadi1'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/kendaraanpribadi1/'.$this->input->post('kendaraanpribadi1_file'));
            $this->M_kendaraanpribadi1->delete($this->input->post('kendaraanpribadi1_id'));
        redirect('kendaraanpribadi1');

    }
}
?>
