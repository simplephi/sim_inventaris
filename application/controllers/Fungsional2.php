<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Fungsional2 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_fungsional2");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['fungsional2']=$this->M_fungsional2->tampil_data_fungsional2();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("fungsional2",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/fungsional2/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['fungsional2_file']['name'])
        {
            if ($this->upload->do_upload('fungsional2_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'fungsional2_file' =>$gbr['file_name'],
                  'fungsional2_name' =>$this->input->post('fungsional2_name'),
          'fungsional2_desc' =>$this->input->post('fungsional2_desc'),
                    );
                $this->M_fungsional2->input($data);
            }
        }

        else
        {
        $data['fungsional2_name'] = $this->input->post('fungsional2_name');
        $data['fungsional2_desc'] = $this->input->post('fungsional2_desc');
        $data['fungsional2_file'] = $this->input->post('fungsional2_file');

        //call function
        $this->M_fungsional2->input($data);
        //redirect to page

      }
          redirect('Fungsional2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/fungsional2/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['fungsional2_file']['name'])
         {
          unlink('./assets/fungsional2/'.$this->input->post('fungsional2_file'));
             if ($this->upload->do_upload('fungsional2_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'fungsional2_id' =>$this->input->post('fungsional2_id'),
        'fungsional2_file' =>$gbr['file_name'],
                 'fungsional2_name' =>$this->input->post('fungsional2_name'),
                 'fungsional2_desc' =>$this->input->post('fungsional2_desc'),
                     );
                 $this->M_fungsional2->edit($data);
             }
         }

         else
         {
           $data['fungsional2_id'] = $this->input->post('fungsional2_id');
           $data['fungsional2_name'] = $this->input->post('fungsional2_name');
           $data['fungsional2_desc'] = $this->input->post('fungsional2_desc');
           $data['fungsional2_file'] = $this->input->post('fungsional2_file');
         //call function
         $this->M_fungsional2->edit($data);
         //redirect to page

        }
           redirect('Fungsional2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/fungsional2/'.$this->input->post('fungsional2_file'));
            $this->M_fungsional2->delete($this->input->post('fungsional2_id'));
        redirect('Fungsional2');

    }
}
?>
