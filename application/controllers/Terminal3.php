<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Terminal3 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_terminal3");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['terminal3']=$this->M_terminal3->tampil_data_terminal3();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("terminal3",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/terminal3/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['terminal3_file']['name'])
        {
            if ($this->upload->do_upload('terminal3_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'terminal3_file' =>$gbr['file_name'],
                  'terminal3_name' =>$this->input->post('terminal3_name'),
          'terminal3_input' =>$this->input->post('terminal3_input'),
          'terminal3_verifikasi' =>$this->input->post('terminal3_verifikasi'),
          'terminal3_satuan' =>$this->input->post('terminal3_satuan'),
          'terminal3_sumber' =>$this->input->post('terminal3_sumber'),
                    );
                $this->M_terminal3->input($data);
            }
        }

        else
        {
        $data['terminal3_name'] = $this->input->post('terminal3_name');
        $data['terminal3_input'] = $this->input->post('terminal3_input');
        $data['terminal3_verifikasi'] = $this->input->post('terminal3_verifikasi');
        $data['terminal3_satuan'] = $this->input->post('terminal3_satuan');
        $data['terminal3_sumber'] = $this->input->post('terminal3_sumber');
        $data['terminal3_file'] = $this->input->post('terminal3_file');

        //call function
        $this->M_terminal3->input($data);
        //redirect to page

      }
          redirect('terminal3'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/terminal3/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['terminal3_file']['name'])
         {
          unlink('./assets/terminal3/'.$this->input->post('terminal3_file'));
             if ($this->upload->do_upload('terminal3_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'terminal3_id' =>$this->input->post('terminal3_id'),
        'terminal3_file' =>$gbr['file_name'],
                 'terminal3_name' =>$this->input->post('terminal3_name'),
                 'terminal3_input' =>$this->input->post('terminal3_input'),
                 'terminal3_verifikasi' =>$this->input->post('terminal3_verifikasi'),
                 'terminal3_satuan' =>$this->input->post('terminal3_satuan'),
                 'terminal3_sumber' =>$this->input->post('terminal3_sumber'),
                     );
                 $this->M_terminal3->edit($data);
             }
         }

         else
         {
           $data['terminal3_id'] = $this->input->post('terminal3_id');
           $data['terminal3_name'] = $this->input->post('terminal3_name');
           $data['terminal3_input'] = $this->input->post('terminal3_input');
           $data['terminal3_verifikasi'] = $this->input->post('terminal3_verifikasi');
           $data['terminal3_satuan'] = $this->input->post('terminal3_satuan');
           $data['terminal3_sumber'] = $this->input->post('terminal3_sumber');
           $data['terminal3_file'] = $this->input->post('terminal3_file');
         //call function
         $this->M_terminal3->edit($data);
         //redirect to page

        }
           redirect('terminal3'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/terminal3/'.$this->input->post('terminal3_file'));
            $this->M_terminal3->delete($this->input->post('terminal3_id'));
        redirect('terminal3');

    }
}
?>
