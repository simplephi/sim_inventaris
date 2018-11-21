<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pengujiankir extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_pengujiankir");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['pengujiankir']=$this->M_pengujiankir->tampil_data_pengujiankir();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("pengujiankir",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/pengujiankir/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['pengujiankir_file']['name'])
        {
            if ($this->upload->do_upload('pengujiankir_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'pengujiankir_file' =>$gbr['file_name'],
                  'pengujiankir_name' =>$this->input->post('pengujiankir_name'),
          'pengujiankir_input' =>$this->input->post('pengujiankir_input'),
          'pengujiankir_verifikasi' =>$this->input->post('pengujiankir_verifikasi'),
          'pengujiankir_satuan' =>$this->input->post('pengujiankir_satuan'),
          'pengujiankir_sumber' =>$this->input->post('pengujiankir_sumber'),
                    );
                $this->M_pengujiankir->input($data);
            }
        }

        else
        {
        $data['pengujiankir_name'] = $this->input->post('pengujiankir_name');
        $data['pengujiankir_input'] = $this->input->post('pengujiankir_input');
        $data['pengujiankir_verifikasi'] = $this->input->post('pengujiankir_verifikasi');
        $data['pengujiankir_satuan'] = $this->input->post('pengujiankir_satuan');
        $data['pengujiankir_sumber'] = $this->input->post('pengujiankir_sumber');
        $data['pengujiankir_file'] = $this->input->post('pengujiankir_file');

        //call function
        $this->M_pengujiankir->input($data);
        //redirect to page

      }
          redirect('pengujiankir'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/pengujiankir/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['pengujiankir_file']['name'])
         {
          unlink('./assets/pengujiankir/'.$this->input->post('pengujiankir_file'));
             if ($this->upload->do_upload('pengujiankir_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'pengujiankir_id' =>$this->input->post('pengujiankir_id'),
        'pengujiankir_file' =>$gbr['file_name'],
                 'pengujiankir_name' =>$this->input->post('pengujiankir_name'),
                 'pengujiankir_input' =>$this->input->post('pengujiankir_input'),
                 'pengujiankir_verifikasi' =>$this->input->post('pengujiankir_verifikasi'),
                 'pengujiankir_satuan' =>$this->input->post('pengujiankir_satuan'),
                 'pengujiankir_sumber' =>$this->input->post('pengujiankir_sumber'),
                     );
                 $this->M_pengujiankir->edit($data);
             }
         }

         else
         {
           $data['pengujiankir_id'] = $this->input->post('pengujiankir_id');
           $data['pengujiankir_name'] = $this->input->post('pengujiankir_name');
           $data['pengujiankir_input'] = $this->input->post('pengujiankir_input');
           $data['pengujiankir_verifikasi'] = $this->input->post('pengujiankir_verifikasi');
           $data['pengujiankir_satuan'] = $this->input->post('pengujiankir_satuan');
           $data['pengujiankir_sumber'] = $this->input->post('pengujiankir_sumber');
           $data['pengujiankir_file'] = $this->input->post('pengujiankir_file');
         //call function
         $this->M_pengujiankir->edit($data);
         //redirect to page

        }
           redirect('pengujiankir'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/pengujiankir/'.$this->input->post('pengujiankir_file'));
            $this->M_pengujiankir->delete($this->input->post('pengujiankir_id'));
        redirect('pengujiankir');

    }
}
?>
