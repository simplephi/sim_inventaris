<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Fungsional1 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_fungsional1");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['fungsional1']=$this->M_fungsional1->tampil_data_fungsional1();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("fungsional1",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/fungsional1/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['fungsional1_file']['name'])
        {
            if ($this->upload->do_upload('fungsional1_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'fungsional1_file' =>$gbr['file_name'],
                  'fungsional1_name' =>$this->input->post('fungsional1_name'),
          'fungsional1_desc' =>$this->input->post('fungsional1_desc'),
                    );
                $this->M_fungsional1->input($data);
            }
        }

        else
        {
        $data['fungsional1_name'] = $this->input->post('fungsional1_name');
        $data['fungsional1_desc'] = $this->input->post('fungsional1_desc');
        $data['fungsional1_file'] = $this->input->post('fungsional1_file');

        //call function
        $this->M_fungsional1->input($data);
        //redirect to page

      }
          redirect('Fungsional1'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/fungsional1/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['fungsional1_file']['name'])
         {
          unlink('./assets/fungsional1/'.$this->input->post('fungsional1_file'));
             if ($this->upload->do_upload('fungsional1_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'fungsional1_id' =>$this->input->post('fungsional1_id'),
        'fungsional1_file' =>$gbr['file_name'],
                 'fungsional1_name' =>$this->input->post('fungsional1_name'),
                 'fungsional1_desc' =>$this->input->post('fungsional1_desc'),
                     );
                 $this->M_fungsional1->edit($data);
             }
         }

         else
         {
           $data['fungsional1_id'] = $this->input->post('fungsional1_id');
           $data['fungsional1_name'] = $this->input->post('fungsional1_name');
           $data['fungsional1_desc'] = $this->input->post('fungsional1_desc');
           $data['fungsional1_file'] = $this->input->post('fungsional1_file');
         //call function
         $this->M_fungsional1->edit($data);
         //redirect to page

        }
           redirect('Fungsional1'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/fungsional1/'.$this->input->post('fungsional1_file'));
            $this->M_fungsional1->delete($this->input->post('fungsional1_id'));
        redirect('Fungsional1');

    }
}
?>