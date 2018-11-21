<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tipea1 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_tipea1");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['tipea1']=$this->M_tipea1->tampil_data_tipea1();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("tipea1",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/tipea1/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['tipea1_file']['name'])
        {
            if ($this->upload->do_upload('tipea1_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'tipea1_file' =>$gbr['file_name'],
                  'tipea1_name' =>$this->input->post('tipea1_name'),
          'tipea1_input' =>$this->input->post('tipea1_input'),
          'tipea1_verifikasi' =>$this->input->post('tipea1_verifikasi'),
          'tipea1_satuan' =>$this->input->post('tipea1_satuan'),
          'tipea1_sumber' =>$this->input->post('tipea1_sumber'),
                    );
                $this->M_tipea1->input($data);
            }
        }

        else
        {
        $data['tipea1_name'] = $this->input->post('tipea1_name');
        $data['tipea1_input'] = $this->input->post('tipea1_input');
        $data['tipea1_verifikasi'] = $this->input->post('tipea1_verifikasi');
        $data['tipea1_satuan'] = $this->input->post('tipea1_satuan');
        $data['tipea1_sumber'] = $this->input->post('tipea1_sumber');
        $data['tipea1_file'] = $this->input->post('tipea1_file');

        //call function
        $this->M_tipea1->input($data);
        //redirect to page

      }
          redirect('tipea1'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/tipea1/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['tipea1_file']['name'])
         {
          unlink('./assets/tipea1/'.$this->input->post('tipea1_file'));
             if ($this->upload->do_upload('tipea1_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'tipea1_id' =>$this->input->post('tipea1_id'),
        'tipea1_file' =>$gbr['file_name'],
                 'tipea1_name' =>$this->input->post('tipea1_name'),
                 'tipea1_input' =>$this->input->post('tipea1_input'),
                 'tipea1_verifikasi' =>$this->input->post('tipea1_verifikasi'),
                 'tipea1_satuan' =>$this->input->post('tipea1_satuan'),
                 'tipea1_sumber' =>$this->input->post('tipea1_sumber'),
                     );
                 $this->M_tipea1->edit($data);
             }
         }

         else
         {
           $data['tipea1_id'] = $this->input->post('tipea1_id');
           $data['tipea1_name'] = $this->input->post('tipea1_name');
           $data['tipea1_input'] = $this->input->post('tipea1_input');
           $data['tipea1_verifikasi'] = $this->input->post('tipea1_verifikasi');
           $data['tipea1_satuan'] = $this->input->post('tipea1_satuan');
           $data['tipea1_sumber'] = $this->input->post('tipea1_sumber');
           $data['tipea1_file'] = $this->input->post('tipea1_file');
         //call function
         $this->M_tipea1->edit($data);
         //redirect to page

        }
           redirect('tipea1'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/tipea1/'.$this->input->post('tipea1_file'));
            $this->M_tipea1->delete($this->input->post('tipea1_id'));
        redirect('tipea1');

    }
}
?>
