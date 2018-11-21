<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kompetensi2 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_kompetensi2");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['kompetensi2']=$this->M_kompetensi2->tampil_data_kompetensi2();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("kompetensi2",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/kompetensi2/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['kompetensi2_file']['name'])
        {
            if ($this->upload->do_upload('kompetensi2_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'kompetensi2_file' =>$gbr['file_name'],
                  'kompetensi2_name' =>$this->input->post('kompetensi2_name'),
          'kompetensi2_desc' =>$this->input->post('kompetensi2_desc'),
                    );
                $this->M_kompetensi2->input($data);
            }
        }

        else
        {
        $data['kompetensi2_name'] = $this->input->post('kompetensi2_name');
        $data['kompetensi2_desc'] = $this->input->post('kompetensi2_desc');
        $data['kompetensi2_file'] = $this->input->post('kompetensi2_file');

        //call function
        $this->M_kompetensi2->input($data);
        //redirect to page

      }
          redirect('Kompetensi2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/kompetensi2/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['kompetensi2_file']['name'])
         {
          unlink('./assets/kompetensi2/'.$this->input->post('kompetensi2_file'));
             if ($this->upload->do_upload('kompetensi2_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'kompetensi2_id' =>$this->input->post('kompetensi2_id'),
        'kompetensi2_file' =>$gbr['file_name'],
                 'kompetensi2_name' =>$this->input->post('kompetensi2_name'),
                 'kompetensi2_desc' =>$this->input->post('kompetensi2_desc'),
                     );
                 $this->M_kompetensi2->edit($data);
             }
         }

         else
         {
           $data['kompetensi2_id'] = $this->input->post('kompetensi2_id');
           $data['kompetensi2_name'] = $this->input->post('kompetensi2_name');
           $data['kompetensi2_desc'] = $this->input->post('kompetensi2_desc');
           $data['kompetensi2_file'] = $this->input->post('kompetensi2_file');
         //call function
         $this->M_kompetensi2->edit($data);
         //redirect to page

        }
           redirect('Kompetensi2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/kompetensi2/'.$this->input->post('kompetensi2_file'));
            $this->M_kompetensi2->delete($this->input->post('kompetensi2_id'));
        redirect('Kompetensi2');

    }
}
?>
