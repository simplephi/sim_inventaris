<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pengumpan1 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_pengumpan1");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['pengumpan1']=$this->M_pengumpan1->tampil_data_pengumpan1();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("pengumpan1",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/pengumpan1/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['pengumpan1_file']['name'])
        {
            if ($this->upload->do_upload('pengumpan1_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'pengumpan1_file' =>$gbr['file_name'],
                  'pengumpan1_name' =>$this->input->post('pengumpan1_name'),
          'pengumpan1_input' =>$this->input->post('pengumpan1_input'),
          'pengumpan1_verifikasi' =>$this->input->post('pengumpan1_verifikasi'),
          'pengumpan1_satuan' =>$this->input->post('pengumpan1_satuan'),
          'pengumpan1_sumber' =>$this->input->post('pengumpan1_sumber'),
                    );
                $this->M_pengumpan1->input($data);
            }
        }

        else
        {
        $data['pengumpan1_name'] = $this->input->post('pengumpan1_name');
        $data['pengumpan1_input'] = $this->input->post('pengumpan1_input');
        $data['pengumpan1_verifikasi'] = $this->input->post('pengumpan1_verifikasi');
        $data['pengumpan1_satuan'] = $this->input->post('pengumpan1_satuan');
        $data['pengumpan1_sumber'] = $this->input->post('pengumpan1_sumber');
        $data['pengumpan1_file'] = $this->input->post('pengumpan1_file');

        //call function
        $this->M_pengumpan1->input($data);
        //redirect to page

      }
          redirect('pengumpan1'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/pengumpan1/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['pengumpan1_file']['name'])
         {
          unlink('./assets/pengumpan1/'.$this->input->post('pengumpan1_file'));
             if ($this->upload->do_upload('pengumpan1_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'pengumpan1_id' =>$this->input->post('pengumpan1_id'),
        'pengumpan1_file' =>$gbr['file_name'],
                 'pengumpan1_name' =>$this->input->post('pengumpan1_name'),
                 'pengumpan1_input' =>$this->input->post('pengumpan1_input'),
                 'pengumpan1_verifikasi' =>$this->input->post('pengumpan1_verifikasi'),
                 'pengumpan1_satuan' =>$this->input->post('pengumpan1_satuan'),
                 'pengumpan1_sumber' =>$this->input->post('pengumpan1_sumber'),
                     );
                 $this->M_pengumpan1->edit($data);
             }
         }

         else
         {
           $data['pengumpan1_id'] = $this->input->post('pengumpan1_id');
           $data['pengumpan1_name'] = $this->input->post('pengumpan1_name');
           $data['pengumpan1_input'] = $this->input->post('pengumpan1_input');
           $data['pengumpan1_verifikasi'] = $this->input->post('pengumpan1_verifikasi');
           $data['pengumpan1_satuan'] = $this->input->post('pengumpan1_satuan');
           $data['pengumpan1_sumber'] = $this->input->post('pengumpan1_sumber');
           $data['pengumpan1_file'] = $this->input->post('pengumpan1_file');
         //call function
         $this->M_pengumpan1->edit($data);
         //redirect to page

        }
           redirect('pengumpan1'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/pengumpan1/'.$this->input->post('pengumpan1_file'));
            $this->M_pengumpan1->delete($this->input->post('pengumpan1_id'));
        redirect('pengumpan1');

    }
}
?>
