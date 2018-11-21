<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Penumpang2 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_penumpang2");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['penumpang2']=$this->M_penumpang2->tampil_data_penumpang2();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("penumpang2",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/penumpang2/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['penumpang2_file']['name'])
        {
            if ($this->upload->do_upload('penumpang2_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'penumpang2_file' =>$gbr['file_name'],
                  'penumpang2_name' =>$this->input->post('penumpang2_name'),
          'penumpang2_input' =>$this->input->post('penumpang2_input'),
          'penumpang2_verifikasi' =>$this->input->post('penumpang2_verifikasi'),
          'penumpang2_satuan' =>$this->input->post('penumpang2_satuan'),
          'penumpang2_sumber' =>$this->input->post('penumpang2_sumber'),
                    );
                $this->M_penumpang2->input($data);
            }
        }

        else
        {
        $data['penumpang2_name'] = $this->input->post('penumpang2_name');
        $data['penumpang2_input'] = $this->input->post('penumpang2_input');
        $data['penumpang2_verifikasi'] = $this->input->post('penumpang2_verifikasi');
        $data['penumpang2_satuan'] = $this->input->post('penumpang2_satuan');
        $data['penumpang2_sumber'] = $this->input->post('penumpang2_sumber');
        $data['penumpang2_file'] = $this->input->post('penumpang2_file');

        //call function
        $this->M_penumpang2->input($data);
        //redirect to page

      }
          redirect('penumpang2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/penumpang2/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['penumpang2_file']['name'])
         {
          unlink('./assets/penumpang2/'.$this->input->post('penumpang2_file'));
             if ($this->upload->do_upload('penumpang2_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'penumpang2_id' =>$this->input->post('penumpang2_id'),
        'penumpang2_file' =>$gbr['file_name'],
                 'penumpang2_name' =>$this->input->post('penumpang2_name'),
                 'penumpang2_input' =>$this->input->post('penumpang2_input'),
                 'penumpang2_verifikasi' =>$this->input->post('penumpang2_verifikasi'),
                 'penumpang2_satuan' =>$this->input->post('penumpang2_satuan'),
                 'penumpang2_sumber' =>$this->input->post('penumpang2_sumber'),
                     );
                 $this->M_penumpang2->edit($data);
             }
         }

         else
         {
           $data['penumpang2_id'] = $this->input->post('penumpang2_id');
           $data['penumpang2_name'] = $this->input->post('penumpang2_name');
           $data['penumpang2_input'] = $this->input->post('penumpang2_input');
           $data['penumpang2_verifikasi'] = $this->input->post('penumpang2_verifikasi');
           $data['penumpang2_satuan'] = $this->input->post('penumpang2_satuan');
           $data['penumpang2_sumber'] = $this->input->post('penumpang2_sumber');
           $data['penumpang2_file'] = $this->input->post('penumpang2_file');
         //call function
         $this->M_penumpang2->edit($data);
         //redirect to page

        }
           redirect('penumpang2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/penumpang2/'.$this->input->post('penumpang2_file'));
            $this->M_penumpang2->delete($this->input->post('penumpang2_id'));
        redirect('penumpang2');

    }
}
?>
