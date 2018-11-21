<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Terminal2 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_terminal2");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['terminal2']=$this->M_terminal2->tampil_data_terminal2();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("terminal2",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/terminal2/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['terminal2_file']['name'])
        {
            if ($this->upload->do_upload('terminal2_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'terminal2_file' =>$gbr['file_name'],
                  'terminal2_name' =>$this->input->post('terminal2_name'),
          'terminal2_input' =>$this->input->post('terminal2_input'),
          'terminal2_verifikasi' =>$this->input->post('terminal2_verifikasi'),
          'terminal2_satuan' =>$this->input->post('terminal2_satuan'),
          'terminal2_sumber' =>$this->input->post('terminal2_sumber'),
                    );
                $this->M_terminal2->input($data);
            }
        }

        else
        {
        $data['terminal2_name'] = $this->input->post('terminal2_name');
        $data['terminal2_input'] = $this->input->post('terminal2_input');
        $data['terminal2_verifikasi'] = $this->input->post('terminal2_verifikasi');
        $data['terminal2_satuan'] = $this->input->post('terminal2_satuan');
        $data['terminal2_sumber'] = $this->input->post('terminal2_sumber');
        $data['terminal2_file'] = $this->input->post('terminal2_file');

        //call function
        $this->M_terminal2->input($data);
        //redirect to page

      }
          redirect('terminal2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/terminal2/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['terminal2_file']['name'])
         {
          unlink('./assets/terminal2/'.$this->input->post('terminal2_file'));
             if ($this->upload->do_upload('terminal2_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'terminal2_id' =>$this->input->post('terminal2_id'),
        'terminal2_file' =>$gbr['file_name'],
                 'terminal2_name' =>$this->input->post('terminal2_name'),
                 'terminal2_input' =>$this->input->post('terminal2_input'),
                 'terminal2_verifikasi' =>$this->input->post('terminal2_verifikasi'),
                 'terminal2_satuan' =>$this->input->post('terminal2_satuan'),
                 'terminal2_sumber' =>$this->input->post('terminal2_sumber'),
                     );
                 $this->M_terminal2->edit($data);
             }
         }

         else
         {
           $data['terminal2_id'] = $this->input->post('terminal2_id');
           $data['terminal2_name'] = $this->input->post('terminal2_name');
           $data['terminal2_input'] = $this->input->post('terminal2_input');
           $data['terminal2_verifikasi'] = $this->input->post('terminal2_verifikasi');
           $data['terminal2_satuan'] = $this->input->post('terminal2_satuan');
           $data['terminal2_sumber'] = $this->input->post('terminal2_sumber');
           $data['terminal2_file'] = $this->input->post('terminal2_file');
         //call function
         $this->M_terminal2->edit($data);
         //redirect to page

        }
           redirect('terminal2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/terminal2/'.$this->input->post('terminal2_file'));
            $this->M_terminal2->delete($this->input->post('terminal2_id'));
        redirect('terminal2');

    }
}
?>
