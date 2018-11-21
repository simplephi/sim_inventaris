<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Badanusaha1 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_badanusaha1");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['badanusaha1']=$this->M_badanusaha1->tampil_data_badanusaha1();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("badanusaha1",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/badanusaha1/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['badanusaha1_file']['name'])
        {
            if ($this->upload->do_upload('badanusaha1_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'badanusaha1_file' =>$gbr['file_name'],
                  'badanusaha1_name' =>$this->input->post('badanusaha1_name'),
          'badanusaha1_input' =>$this->input->post('badanusaha1_input'),
          'badanusaha1_verifikasi' =>$this->input->post('badanusaha1_verifikasi'),
          'badanusaha1_satuan' =>$this->input->post('badanusaha1_satuan'),
          'badanusaha1_sumber' =>$this->input->post('badanusaha1_sumber'),
                    );
                $this->M_badanusaha1->input($data);
            }
        }

        else
        {
        $data['badanusaha1_name'] = $this->input->post('badanusaha1_name');
        $data['badanusaha1_input'] = $this->input->post('badanusaha1_input');
        $data['badanusaha1_verifikasi'] = $this->input->post('badanusaha1_verifikasi');
        $data['badanusaha1_satuan'] = $this->input->post('badanusaha1_satuan');
        $data['badanusaha1_sumber'] = $this->input->post('badanusaha1_sumber');
        $data['badanusaha1_file'] = $this->input->post('badanusaha1_file');

        //call function
        $this->M_badanusaha1->input($data);
        //redirect to page

      }
          redirect('badanusaha1'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/badanusaha1/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['badanusaha1_file']['name'])
         {
          unlink('./assets/badanusaha1/'.$this->input->post('badanusaha1_file'));
             if ($this->upload->do_upload('badanusaha1_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'badanusaha1_id' =>$this->input->post('badanusaha1_id'),
        'badanusaha1_file' =>$gbr['file_name'],
                 'badanusaha1_name' =>$this->input->post('badanusaha1_name'),
                 'badanusaha1_input' =>$this->input->post('badanusaha1_input'),
                 'badanusaha1_verifikasi' =>$this->input->post('badanusaha1_verifikasi'),
                 'badanusaha1_satuan' =>$this->input->post('badanusaha1_satuan'),
                 'badanusaha1_sumber' =>$this->input->post('badanusaha1_sumber'),
                     );
                 $this->M_badanusaha1->edit($data);
             }
         }

         else
         {
           $data['badanusaha1_id'] = $this->input->post('badanusaha1_id');
           $data['badanusaha1_name'] = $this->input->post('badanusaha1_name');
           $data['badanusaha1_input'] = $this->input->post('badanusaha1_input');
           $data['badanusaha1_verifikasi'] = $this->input->post('badanusaha1_verifikasi');
           $data['badanusaha1_satuan'] = $this->input->post('badanusaha1_satuan');
           $data['badanusaha1_sumber'] = $this->input->post('badanusaha1_sumber');
           $data['badanusaha1_file'] = $this->input->post('badanusaha1_file');
         //call function
         $this->M_badanusaha1->edit($data);
         //redirect to page

        }
           redirect('badanusaha1'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/badanusaha1/'.$this->input->post('badanusaha1_file'));
            $this->M_badanusaha1->delete($this->input->post('badanusaha1_id'));
        redirect('badanusaha1');

    }
}
?>
