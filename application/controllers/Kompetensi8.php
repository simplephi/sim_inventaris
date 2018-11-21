<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kompetensi8 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_kompetensi8");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['kompetensi8']=$this->M_kompetensi8->tampil_data_kompetensi8();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("kompetensi8",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/kompetensi8/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['kompetensi8_file']['name'])
        {
            if ($this->upload->do_upload('kompetensi8_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'kompetensi8_file' =>$gbr['file_name'],
                  'kompetensi8_name' =>$this->input->post('kompetensi8_name'),
          'kompetensi8_desc' =>$this->input->post('kompetensi8_desc'),
                    );
                $this->M_kompetensi8->input($data);
            }
        }

        else
        {
        $data['kompetensi8_name'] = $this->input->post('kompetensi8_name');
        $data['kompetensi8_desc'] = $this->input->post('kompetensi8_desc');
        $data['kompetensi8_file'] = $this->input->post('kompetensi8_file');

        //call function
        $this->M_kompetensi8->input($data);
        //redirect to page

      }
          redirect('Kompetensi8'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/kompetensi8/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['kompetensi8_file']['name'])
         {
          unlink('./assets/kompetensi8/'.$this->input->post('kompetensi8_file'));
             if ($this->upload->do_upload('kompetensi8_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'kompetensi8_id' =>$this->input->post('kompetensi8_id'),
        'kompetensi8_file' =>$gbr['file_name'],
                 'kompetensi8_name' =>$this->input->post('kompetensi8_name'),
                 'kompetensi8_desc' =>$this->input->post('kompetensi8_desc'),
                     );
                 $this->M_kompetensi8->edit($data);
             }
         }

         else
         {
           $data['kompetensi8_id'] = $this->input->post('kompetensi8_id');
           $data['kompetensi8_name'] = $this->input->post('kompetensi8_name');
           $data['kompetensi8_desc'] = $this->input->post('kompetensi8_desc');
           $data['kompetensi8_file'] = $this->input->post('kompetensi8_file');
         //call function
         $this->M_kompetensi8->edit($data);
         //redirect to page

        }
           redirect('Kompetensi8'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/kompetensi8/'.$this->input->post('kompetensi8_file'));
            $this->M_kompetensi8->delete($this->input->post('kompetensi8_id'));
        redirect('Kompetensi8');

    }
}
?>
