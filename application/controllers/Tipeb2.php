<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tipeb2 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_tipeb2");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['tipeb2']=$this->M_tipeb2->tampil_data_tipeb2();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("tipeb2",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/tipeb2/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['tipeb2_file']['name'])
        {
            if ($this->upload->do_upload('tipeb2_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'tipeb2_file' =>$gbr['file_name'],
                  'tipeb2_name' =>$this->input->post('tipeb2_name'),
          'tipeb2_input' =>$this->input->post('tipeb2_input'),
          'tipeb2_verifikasi' =>$this->input->post('tipeb2_verifikasi'),
          'tipeb2_satuan' =>$this->input->post('tipeb2_satuan'),
          'tipeb2_sumber' =>$this->input->post('tipeb2_sumber'),
                    );
                $this->M_tipeb2->input($data);
            }
        }

        else
        {
        $data['tipeb2_name'] = $this->input->post('tipeb2_name');
        $data['tipeb2_input'] = $this->input->post('tipeb2_input');
        $data['tipeb2_verifikasi'] = $this->input->post('tipeb2_verifikasi');
        $data['tipeb2_satuan'] = $this->input->post('tipeb2_satuan');
        $data['tipeb2_sumber'] = $this->input->post('tipeb2_sumber');
        $data['tipeb2_file'] = $this->input->post('tipeb2_file');

        //call function
        $this->M_tipeb2->input($data);
        //redirect to page

      }
          redirect('tipeb2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/tipeb2/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['tipeb2_file']['name'])
         {
          unlink('./assets/tipeb2/'.$this->input->post('tipeb2_file'));
             if ($this->upload->do_upload('tipeb2_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'tipeb2_id' =>$this->input->post('tipeb2_id'),
        'tipeb2_file' =>$gbr['file_name'],
                 'tipeb2_name' =>$this->input->post('tipeb2_name'),
                 'tipeb2_input' =>$this->input->post('tipeb2_input'),
                 'tipeb2_verifikasi' =>$this->input->post('tipeb2_verifikasi'),
                 'tipeb2_satuan' =>$this->input->post('tipeb2_satuan'),
                 'tipeb2_sumber' =>$this->input->post('tipeb2_sumber'),
                     );
                 $this->M_tipeb2->edit($data);
             }
         }

         else
         {
           $data['tipeb2_id'] = $this->input->post('tipeb2_id');
           $data['tipeb2_name'] = $this->input->post('tipeb2_name');
           $data['tipeb2_input'] = $this->input->post('tipeb2_input');
           $data['tipeb2_verifikasi'] = $this->input->post('tipeb2_verifikasi');
           $data['tipeb2_satuan'] = $this->input->post('tipeb2_satuan');
           $data['tipeb2_sumber'] = $this->input->post('tipeb2_sumber');
           $data['tipeb2_file'] = $this->input->post('tipeb2_file');
         //call function
         $this->M_tipeb2->edit($data);
         //redirect to page

        }
           redirect('tipeb2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/tipeb2/'.$this->input->post('tipeb2_file'));
            $this->M_tipeb2->delete($this->input->post('tipeb2_id'));
        redirect('tipeb2');

    }
}
?>
