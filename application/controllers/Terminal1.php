<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Terminal1 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_terminal1");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['terminal1']=$this->M_terminal1->tampil_data_terminal1();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("terminal1",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/terminal1/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['terminal1_file']['name'])
        {
            if ($this->upload->do_upload('terminal1_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'terminal1_file' =>$gbr['file_name'],
                  'terminal1_name' =>$this->input->post('terminal1_name'),
          'terminal1_input' =>$this->input->post('terminal1_input'),
          'terminal1_verifikasi' =>$this->input->post('terminal1_verifikasi'),
          'terminal1_satuan' =>$this->input->post('terminal1_satuan'),
          'terminal1_sumber' =>$this->input->post('terminal1_sumber'),
                    );
                $this->M_terminal1->input($data);
            }
        }

        else
        {
        $data['terminal1_name'] = $this->input->post('terminal1_name');
        $data['terminal1_input'] = $this->input->post('terminal1_input');
        $data['terminal1_verifikasi'] = $this->input->post('terminal1_verifikasi');
        $data['terminal1_satuan'] = $this->input->post('terminal1_satuan');
        $data['terminal1_sumber'] = $this->input->post('terminal1_sumber');
        $data['terminal1_file'] = $this->input->post('terminal1_file');

        //call function
        $this->M_terminal1->input($data);
        //redirect to page

      }
          redirect('terminal1'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/terminal1/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['terminal1_file']['name'])
         {
          unlink('./assets/terminal1/'.$this->input->post('terminal1_file'));
             if ($this->upload->do_upload('terminal1_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'terminal1_id' =>$this->input->post('terminal1_id'),
        'terminal1_file' =>$gbr['file_name'],
                 'terminal1_name' =>$this->input->post('terminal1_name'),
                 'terminal1_input' =>$this->input->post('terminal1_input'),
                 'terminal1_verifikasi' =>$this->input->post('terminal1_verifikasi'),
                 'terminal1_satuan' =>$this->input->post('terminal1_satuan'),
                 'terminal1_sumber' =>$this->input->post('terminal1_sumber'),
                     );
                 $this->M_terminal1->edit($data);
             }
         }

         else
         {
           $data['terminal1_id'] = $this->input->post('terminal1_id');
           $data['terminal1_name'] = $this->input->post('terminal1_name');
           $data['terminal1_input'] = $this->input->post('terminal1_input');
           $data['terminal1_verifikasi'] = $this->input->post('terminal1_verifikasi');
           $data['terminal1_satuan'] = $this->input->post('terminal1_satuan');
           $data['terminal1_sumber'] = $this->input->post('terminal1_sumber');
           $data['terminal1_file'] = $this->input->post('terminal1_file');
         //call function
         $this->M_terminal1->edit($data);
         //redirect to page

        }
           redirect('terminal1'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/terminal1/'.$this->input->post('terminal1_file'));
            $this->M_terminal1->delete($this->input->post('terminal1_id'));
        redirect('terminal1');

    }
}
?>
