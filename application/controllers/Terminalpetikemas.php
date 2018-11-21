<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Terminalpetikemas extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_terminalpetikemas");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['terminalpetikemas']=$this->M_terminalpetikemas->tampil_data_terminalpetikemas();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("terminalpetikemas",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/terminalpetikemas/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['terminalpetikemas_file']['name'])
        {
            if ($this->upload->do_upload('terminalpetikemas_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'terminalpetikemas_file' =>$gbr['file_name'],
                  'terminalpetikemas_name' =>$this->input->post('terminalpetikemas_name'),
          'terminalpetikemas_input' =>$this->input->post('terminalpetikemas_input'),
          'terminalpetikemas_verifikasi' =>$this->input->post('terminalpetikemas_verifikasi'),
          'terminalpetikemas_satuan' =>$this->input->post('terminalpetikemas_satuan'),
          'terminalpetikemas_sumber' =>$this->input->post('terminalpetikemas_sumber'),
                    );
                $this->M_terminalpetikemas->input($data);
            }
        }

        else
        {
        $data['terminalpetikemas_name'] = $this->input->post('terminalpetikemas_name');
        $data['terminalpetikemas_input'] = $this->input->post('terminalpetikemas_input');
        $data['terminalpetikemas_verifikasi'] = $this->input->post('terminalpetikemas_verifikasi');
        $data['terminalpetikemas_satuan'] = $this->input->post('terminalpetikemas_satuan');
        $data['terminalpetikemas_sumber'] = $this->input->post('terminalpetikemas_sumber');
        $data['terminalpetikemas_file'] = $this->input->post('terminalpetikemas_file');

        //call function
        $this->M_terminalpetikemas->input($data);
        //redirect to page

      }
          redirect('terminalpetikemas'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/terminalpetikemas/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['terminalpetikemas_file']['name'])
         {
          unlink('./assets/terminalpetikemas/'.$this->input->post('terminalpetikemas_file'));
             if ($this->upload->do_upload('terminalpetikemas_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'terminalpetikemas_id' =>$this->input->post('terminalpetikemas_id'),
        'terminalpetikemas_file' =>$gbr['file_name'],
                 'terminalpetikemas_name' =>$this->input->post('terminalpetikemas_name'),
                 'terminalpetikemas_input' =>$this->input->post('terminalpetikemas_input'),
                 'terminalpetikemas_verifikasi' =>$this->input->post('terminalpetikemas_verifikasi'),
                 'terminalpetikemas_satuan' =>$this->input->post('terminalpetikemas_satuan'),
                 'terminalpetikemas_sumber' =>$this->input->post('terminalpetikemas_sumber'),
                     );
                 $this->M_terminalpetikemas->edit($data);
             }
         }

         else
         {
           $data['terminalpetikemas_id'] = $this->input->post('terminalpetikemas_id');
           $data['terminalpetikemas_name'] = $this->input->post('terminalpetikemas_name');
           $data['terminalpetikemas_input'] = $this->input->post('terminalpetikemas_input');
           $data['terminalpetikemas_verifikasi'] = $this->input->post('terminalpetikemas_verifikasi');
           $data['terminalpetikemas_satuan'] = $this->input->post('terminalpetikemas_satuan');
           $data['terminalpetikemas_sumber'] = $this->input->post('terminalpetikemas_sumber');
           $data['terminalpetikemas_file'] = $this->input->post('terminalpetikemas_file');
         //call function
         $this->M_terminalpetikemas->edit($data);
         //redirect to page

        }
           redirect('terminalpetikemas'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/terminalpetikemas/'.$this->input->post('terminalpetikemas_file'));
            $this->M_terminalpetikemas->delete($this->input->post('terminalpetikemas_id'));
        redirect('terminalpetikemas');

    }
}
?>