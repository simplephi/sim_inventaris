<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Diklat4 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_diklat4");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['diklat4']=$this->M_diklat4->tampil_data_diklat4();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("diklat4",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/diklat4/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['diklat4_file']['name'])
        {
            if ($this->upload->do_upload('diklat4_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'diklat4_file' =>$gbr['file_name'],
                  'diklat4_name' =>$this->input->post('diklat4_name'),
          'diklat4_desc' =>$this->input->post('diklat4_desc'),
                    );
                $this->M_diklat4->input($data);
            }
        }

        else
        {
        $data['diklat4_name'] = $this->input->post('diklat4_name');
        $data['diklat4_desc'] = $this->input->post('diklat4_desc');
        $data['diklat4_file'] = $this->input->post('diklat4_file');

        //call function
        $this->M_diklat4->input($data);
        //redirect to page

      }
          redirect('Diklat4'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/diklat4/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['diklat4_file']['name'])
         {
          unlink('./assets/diklat4/'.$this->input->post('diklat4_file'));
             if ($this->upload->do_upload('diklat4_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'diklat4_id' =>$this->input->post('diklat4_id'),
        'diklat4_file' =>$gbr['file_name'],
                 'diklat4_name' =>$this->input->post('diklat4_name'),
                 'diklat4_desc' =>$this->input->post('diklat4_desc'),
                     );
                 $this->M_diklat4->edit($data);
             }
         }

         else
         {
           $data['diklat4_id'] = $this->input->post('diklat4_id');
           $data['diklat4_name'] = $this->input->post('diklat4_name');
           $data['diklat4_desc'] = $this->input->post('diklat4_desc');
           $data['diklat4_file'] = $this->input->post('diklat4_file');
         //call function
         $this->M_diklat4->edit($data);
         //redirect to page

        }
           redirect('Diklat4'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/diklat4/'.$this->input->post('diklat4_file'));
            $this->M_diklat4->delete($this->input->post('diklat4_id'));
        redirect('Diklat4');

    }
}
?>
