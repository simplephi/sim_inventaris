<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Diklat2 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_diklat2");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['diklat2']=$this->M_diklat2->tampil_data_diklat2();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("diklat2",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/diklat2/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['diklat2_file']['name'])
        {
            if ($this->upload->do_upload('diklat2_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'diklat2_file' =>$gbr['file_name'],
                  'diklat2_name' =>$this->input->post('diklat2_name'),
          'diklat2_desc' =>$this->input->post('diklat2_desc'),
                    );
                $this->M_diklat2->input($data);
            }
        }

        else
        {
        $data['diklat2_name'] = $this->input->post('diklat2_name');
        $data['diklat2_desc'] = $this->input->post('diklat2_desc');
        $data['diklat2_file'] = $this->input->post('diklat2_file');

        //call function
        $this->M_diklat2->input($data);
        //redirect to page

      }
          redirect('Diklat2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/diklat2/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['diklat2_file']['name'])
         {
          unlink('./assets/diklat2/'.$this->input->post('diklat2_file'));
             if ($this->upload->do_upload('diklat2_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'diklat2_id' =>$this->input->post('diklat2_id'),
        'diklat2_file' =>$gbr['file_name'],
                 'diklat2_name' =>$this->input->post('diklat2_name'),
                 'diklat2_desc' =>$this->input->post('diklat2_desc'),
                     );
                 $this->M_diklat2->edit($data);
             }
         }

         else
         {
           $data['diklat2_id'] = $this->input->post('diklat2_id');
           $data['diklat2_name'] = $this->input->post('diklat2_name');
           $data['diklat2_desc'] = $this->input->post('diklat2_desc');
           $data['diklat2_file'] = $this->input->post('diklat2_file');
         //call function
         $this->M_diklat2->edit($data);
         //redirect to page

        }
           redirect('Diklat2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/diklat2/'.$this->input->post('diklat2_file'));
            $this->M_diklat2->delete($this->input->post('diklat2_id'));
        redirect('Diklat2');

    }
}
?>
