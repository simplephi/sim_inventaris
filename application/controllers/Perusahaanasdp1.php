<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Perusahaanasdp1 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_perusahaanasdp1");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['perusahaanasdp1']=$this->M_perusahaanasdp1->tampil_data_perusahaanasdp1();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("perusahaanasdp1",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/perusahaanasdp1/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['perusahaanasdp1_file']['name'])
        {
            if ($this->upload->do_upload('perusahaanasdp1_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'perusahaanasdp1_file' =>$gbr['file_name'],
                  'perusahaanasdp1_name' =>$this->input->post('perusahaanasdp1_name'),
          'perusahaanasdp1_input' =>$this->input->post('perusahaanasdp1_input'),
          'perusahaanasdp1_verifikasi' =>$this->input->post('perusahaanasdp1_verifikasi'),
          'perusahaanasdp1_satuan' =>$this->input->post('perusahaanasdp1_satuan'),
          'perusahaanasdp1_sumber' =>$this->input->post('perusahaanasdp1_sumber'),
                    );
                $this->M_perusahaanasdp1->input($data);
            }
        }

        else
        {
        $data['perusahaanasdp1_name'] = $this->input->post('perusahaanasdp1_name');
        $data['perusahaanasdp1_input'] = $this->input->post('perusahaanasdp1_input');
        $data['perusahaanasdp1_verifikasi'] = $this->input->post('perusahaanasdp1_verifikasi');
        $data['perusahaanasdp1_satuan'] = $this->input->post('perusahaanasdp1_satuan');
        $data['perusahaanasdp1_sumber'] = $this->input->post('perusahaanasdp1_sumber');
        $data['perusahaanasdp1_file'] = $this->input->post('perusahaanasdp1_file');

        //call function
        $this->M_perusahaanasdp1->input($data);
        //redirect to page

      }
          redirect('perusahaanasdp1'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/perusahaanasdp1/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['perusahaanasdp1_file']['name'])
         {
          unlink('./assets/perusahaanasdp1/'.$this->input->post('perusahaanasdp1_file'));
             if ($this->upload->do_upload('perusahaanasdp1_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'perusahaanasdp1_id' =>$this->input->post('perusahaanasdp1_id'),
        'perusahaanasdp1_file' =>$gbr['file_name'],
                 'perusahaanasdp1_name' =>$this->input->post('perusahaanasdp1_name'),
                 'perusahaanasdp1_input' =>$this->input->post('perusahaanasdp1_input'),
                 'perusahaanasdp1_verifikasi' =>$this->input->post('perusahaanasdp1_verifikasi'),
                 'perusahaanasdp1_satuan' =>$this->input->post('perusahaanasdp1_satuan'),
                 'perusahaanasdp1_sumber' =>$this->input->post('perusahaanasdp1_sumber'),
                     );
                 $this->M_perusahaanasdp1->edit($data);
             }
         }

         else
         {
           $data['perusahaanasdp1_id'] = $this->input->post('perusahaanasdp1_id');
           $data['perusahaanasdp1_name'] = $this->input->post('perusahaanasdp1_name');
           $data['perusahaanasdp1_input'] = $this->input->post('perusahaanasdp1_input');
           $data['perusahaanasdp1_verifikasi'] = $this->input->post('perusahaanasdp1_verifikasi');
           $data['perusahaanasdp1_satuan'] = $this->input->post('perusahaanasdp1_satuan');
           $data['perusahaanasdp1_sumber'] = $this->input->post('perusahaanasdp1_sumber');
           $data['perusahaanasdp1_file'] = $this->input->post('perusahaanasdp1_file');
         //call function
         $this->M_perusahaanasdp1->edit($data);
         //redirect to page

        }
           redirect('perusahaanasdp1'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/perusahaanasdp1/'.$this->input->post('perusahaanasdp1_file'));
            $this->M_perusahaanasdp1->delete($this->input->post('perusahaanasdp1_id'));
        redirect('perusahaanasdp1');

    }
}
?>
