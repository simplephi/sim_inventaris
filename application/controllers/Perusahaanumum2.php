<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Perusahaanumum2 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_perusahaanumum2");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['perusahaanumum2']=$this->M_perusahaanumum2->tampil_data_perusahaanumum2();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("perusahaanumum2",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/perusahaanumum2/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['perusahaanumum2_file']['name'])
        {
            if ($this->upload->do_upload('perusahaanumum2_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'perusahaanumum2_file' =>$gbr['file_name'],
                  'perusahaanumum2_name' =>$this->input->post('perusahaanumum2_name'),
          'perusahaanumum2_input' =>$this->input->post('perusahaanumum2_input'),
          'perusahaanumum2_verifikasi' =>$this->input->post('perusahaanumum2_verifikasi'),
          'perusahaanumum2_satuan' =>$this->input->post('perusahaanumum2_satuan'),
          'perusahaanumum2_sumber' =>$this->input->post('perusahaanumum2_sumber'),
                    );
                $this->M_perusahaanumum2->input($data);
            }
        }

        else
        {
        $data['perusahaanumum2_name'] = $this->input->post('perusahaanumum2_name');
        $data['perusahaanumum2_input'] = $this->input->post('perusahaanumum2_input');
        $data['perusahaanumum2_verifikasi'] = $this->input->post('perusahaanumum2_verifikasi');
        $data['perusahaanumum2_satuan'] = $this->input->post('perusahaanumum2_satuan');
        $data['perusahaanumum2_sumber'] = $this->input->post('perusahaanumum2_sumber');
        $data['perusahaanumum2_file'] = $this->input->post('perusahaanumum2_file');

        //call function
        $this->M_perusahaanumum2->input($data);
        //redirect to page

      }
          redirect('perusahaanumum2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/perusahaanumum2/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['perusahaanumum2_file']['name'])
         {
          unlink('./assets/perusahaanumum2/'.$this->input->post('perusahaanumum2_file'));
             if ($this->upload->do_upload('perusahaanumum2_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'perusahaanumum2_id' =>$this->input->post('perusahaanumum2_id'),
        'perusahaanumum2_file' =>$gbr['file_name'],
                 'perusahaanumum2_name' =>$this->input->post('perusahaanumum2_name'),
                 'perusahaanumum2_input' =>$this->input->post('perusahaanumum2_input'),
                 'perusahaanumum2_verifikasi' =>$this->input->post('perusahaanumum2_verifikasi'),
                 'perusahaanumum2_satuan' =>$this->input->post('perusahaanumum2_satuan'),
                 'perusahaanumum2_sumber' =>$this->input->post('perusahaanumum2_sumber'),
                     );
                 $this->M_perusahaanumum2->edit($data);
             }
         }

         else
         {
           $data['perusahaanumum2_id'] = $this->input->post('perusahaanumum2_id');
           $data['perusahaanumum2_name'] = $this->input->post('perusahaanumum2_name');
           $data['perusahaanumum2_input'] = $this->input->post('perusahaanumum2_input');
           $data['perusahaanumum2_verifikasi'] = $this->input->post('perusahaanumum2_verifikasi');
           $data['perusahaanumum2_satuan'] = $this->input->post('perusahaanumum2_satuan');
           $data['perusahaanumum2_sumber'] = $this->input->post('perusahaanumum2_sumber');
           $data['perusahaanumum2_file'] = $this->input->post('perusahaanumum2_file');
         //call function
         $this->M_perusahaanumum2->edit($data);
         //redirect to page

        }
           redirect('perusahaanumum2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/perusahaanumum2/'.$this->input->post('perusahaanumum2_file'));
            $this->M_perusahaanumum2->delete($this->input->post('perusahaanumum2_id'));
        redirect('perusahaanumum2');

    }
}
?>
