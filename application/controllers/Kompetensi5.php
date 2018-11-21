<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kompetensi5 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_kompetensi5");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['kompetensi5']=$this->M_kompetensi5->tampil_data_kompetensi5();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("kompetensi5",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/kompetensi5/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['kompetensi5_file']['name'])
        {
            if ($this->upload->do_upload('kompetensi5_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'kompetensi5_file' =>$gbr['file_name'],
                  'kompetensi5_name' =>$this->input->post('kompetensi5_name'),
          'kompetensi5_desc' =>$this->input->post('kompetensi5_desc'),
                    );
                $this->M_kompetensi5->input($data);
            }
        }

        else
        {
        $data['kompetensi5_name'] = $this->input->post('kompetensi5_name');
        $data['kompetensi5_desc'] = $this->input->post('kompetensi5_desc');
        $data['kompetensi5_file'] = $this->input->post('kompetensi5_file');

        //call function
        $this->M_kompetensi5->input($data);
        //redirect to page

      }
          redirect('Kompetensi5'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/kompetensi5/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['kompetensi5_file']['name'])
         {
          unlink('./assets/kompetensi5/'.$this->input->post('kompetensi5_file'));
             if ($this->upload->do_upload('kompetensi5_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'kompetensi5_id' =>$this->input->post('kompetensi5_id'),
        'kompetensi5_file' =>$gbr['file_name'],
                 'kompetensi5_name' =>$this->input->post('kompetensi5_name'),
                 'kompetensi5_desc' =>$this->input->post('kompetensi5_desc'),
                     );
                 $this->M_kompetensi5->edit($data);
             }
         }

         else
         {
           $data['kompetensi5_id'] = $this->input->post('kompetensi5_id');
           $data['kompetensi5_name'] = $this->input->post('kompetensi5_name');
           $data['kompetensi5_desc'] = $this->input->post('kompetensi5_desc');
           $data['kompetensi5_file'] = $this->input->post('kompetensi5_file');
         //call function
         $this->M_kompetensi5->edit($data);
         //redirect to page

        }
           redirect('Kompetensi5'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/kompetensi5/'.$this->input->post('kompetensi5_file'));
            $this->M_kompetensi5->delete($this->input->post('kompetensi5_id'));
        redirect('Kompetensi5');

    }
}
?>
