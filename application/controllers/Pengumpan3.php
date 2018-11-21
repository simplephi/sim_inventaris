<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pengumpan3 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_pengumpan3");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['pengumpan3']=$this->M_pengumpan3->tampil_data_pengumpan3();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("pengumpan3",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/pengumpan3/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['pengumpan3_file']['name'])
        {
            if ($this->upload->do_upload('pengumpan3_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'pengumpan3_file' =>$gbr['file_name'],
                  'pengumpan3_name' =>$this->input->post('pengumpan3_name'),
          'pengumpan3_input' =>$this->input->post('pengumpan3_input'),
          'pengumpan3_verifikasi' =>$this->input->post('pengumpan3_verifikasi'),
          'pengumpan3_satuan' =>$this->input->post('pengumpan3_satuan'),
          'pengumpan3_sumber' =>$this->input->post('pengumpan3_sumber'),
                    );
                $this->M_pengumpan3->input($data);
            }
        }

        else
        {
        $data['pengumpan3_name'] = $this->input->post('pengumpan3_name');
        $data['pengumpan3_input'] = $this->input->post('pengumpan3_input');
        $data['pengumpan3_verifikasi'] = $this->input->post('pengumpan3_verifikasi');
        $data['pengumpan3_satuan'] = $this->input->post('pengumpan3_satuan');
        $data['pengumpan3_sumber'] = $this->input->post('pengumpan3_sumber');
        $data['pengumpan3_file'] = $this->input->post('pengumpan3_file');

        //call function
        $this->M_pengumpan3->input($data);
        //redirect to page

      }
          redirect('pengumpan3'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/pengumpan3/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['pengumpan3_file']['name'])
         {
          unlink('./assets/pengumpan3/'.$this->input->post('pengumpan3_file'));
             if ($this->upload->do_upload('pengumpan3_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'pengumpan3_id' =>$this->input->post('pengumpan3_id'),
        'pengumpan3_file' =>$gbr['file_name'],
                 'pengumpan3_name' =>$this->input->post('pengumpan3_name'),
                 'pengumpan3_input' =>$this->input->post('pengumpan3_input'),
                 'pengumpan3_verifikasi' =>$this->input->post('pengumpan3_verifikasi'),
                 'pengumpan3_satuan' =>$this->input->post('pengumpan3_satuan'),
                 'pengumpan3_sumber' =>$this->input->post('pengumpan3_sumber'),
                     );
                 $this->M_pengumpan3->edit($data);
             }
         }

         else
         {
           $data['pengumpan3_id'] = $this->input->post('pengumpan3_id');
           $data['pengumpan3_name'] = $this->input->post('pengumpan3_name');
           $data['pengumpan3_input'] = $this->input->post('pengumpan3_input');
           $data['pengumpan3_verifikasi'] = $this->input->post('pengumpan3_verifikasi');
           $data['pengumpan3_satuan'] = $this->input->post('pengumpan3_satuan');
           $data['pengumpan3_sumber'] = $this->input->post('pengumpan3_sumber');
           $data['pengumpan3_file'] = $this->input->post('pengumpan3_file');
         //call function
         $this->M_pengumpan3->edit($data);
         //redirect to page

        }
           redirect('pengumpan3'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/pengumpan3/'.$this->input->post('pengumpan3_file'));
            $this->M_pengumpan3->delete($this->input->post('pengumpan3_id'));
        redirect('pengumpan3');

    }
}
?>
