<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tipec2 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_tipec2");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['tipec2']=$this->M_tipec2->tampil_data_tipec2();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("tipec2",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/tipec2/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['tipec2_file']['name'])
        {
            if ($this->upload->do_upload('tipec2_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'tipec2_file' =>$gbr['file_name'],
                  'tipec2_name' =>$this->input->post('tipec2_name'),
          'tipec2_input' =>$this->input->post('tipec2_input'),
          'tipec2_verifikasi' =>$this->input->post('tipec2_verifikasi'),
          'tipec2_satuan' =>$this->input->post('tipec2_satuan'),
          'tipec2_sumber' =>$this->input->post('tipec2_sumber'),
                    );
                $this->M_tipec2->input($data);
            }
        }

        else
        {
        $data['tipec2_name'] = $this->input->post('tipec2_name');
        $data['tipec2_input'] = $this->input->post('tipec2_input');
        $data['tipec2_verifikasi'] = $this->input->post('tipec2_verifikasi');
        $data['tipec2_satuan'] = $this->input->post('tipec2_satuan');
        $data['tipec2_sumber'] = $this->input->post('tipec2_sumber');
        $data['tipec2_file'] = $this->input->post('tipec2_file');

        //call function
        $this->M_tipec2->input($data);
        //redirect to page

      }
          redirect('tipec2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/tipec2/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['tipec2_file']['name'])
         {
          unlink('./assets/tipec2/'.$this->input->post('tipec2_file'));
             if ($this->upload->do_upload('tipec2_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'tipec2_id' =>$this->input->post('tipec2_id'),
        'tipec2_file' =>$gbr['file_name'],
                 'tipec2_name' =>$this->input->post('tipec2_name'),
                 'tipec2_input' =>$this->input->post('tipec2_input'),
                 'tipec2_verifikasi' =>$this->input->post('tipec2_verifikasi'),
                 'tipec2_satuan' =>$this->input->post('tipec2_satuan'),
                 'tipec2_sumber' =>$this->input->post('tipec2_sumber'),
                     );
                 $this->M_tipec2->edit($data);
             }
         }

         else
         {
           $data['tipec2_id'] = $this->input->post('tipec2_id');
           $data['tipec2_name'] = $this->input->post('tipec2_name');
           $data['tipec2_input'] = $this->input->post('tipec2_input');
           $data['tipec2_verifikasi'] = $this->input->post('tipec2_verifikasi');
           $data['tipec2_satuan'] = $this->input->post('tipec2_satuan');
           $data['tipec2_sumber'] = $this->input->post('tipec2_sumber');
           $data['tipec2_file'] = $this->input->post('tipec2_file');
         //call function
         $this->M_tipec2->edit($data);
         //redirect to page

        }
           redirect('tipec2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/tipec2/'.$this->input->post('tipec2_file'));
            $this->M_tipec2->delete($this->input->post('tipec2_id'));
        redirect('tipec2');

    }
}
?>
