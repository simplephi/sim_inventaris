<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kompetensi12 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_kompetensi12");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['kompetensi12']=$this->M_kompetensi12->tampil_data_kompetensi12();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("kompetensi12",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/kompetensi12/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['kompetensi12_file']['name'])
        {
            if ($this->upload->do_upload('kompetensi12_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'kompetensi12_file' =>$gbr['file_name'],
                  'kompetensi12_name' =>$this->input->post('kompetensi12_name'),
          'kompetensi12_desc' =>$this->input->post('kompetensi12_desc'),
                    );
                $this->M_kompetensi12->input($data);
            }
        }

        else
        {
        $data['kompetensi12_name'] = $this->input->post('kompetensi12_name');
        $data['kompetensi12_desc'] = $this->input->post('kompetensi12_desc');
        $data['kompetensi12_file'] = $this->input->post('kompetensi12_file');

        //call function
        $this->M_kompetensi12->input($data);
        //redirect to page

      }
          redirect('Kompetensi12'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/kompetensi12/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['kompetensi12_file']['name'])
         {
          unlink('./assets/kompetensi12/'.$this->input->post('kompetensi12_file'));
             if ($this->upload->do_upload('kompetensi12_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'kompetensi12_id' =>$this->input->post('kompetensi12_id'),
        'kompetensi12_file' =>$gbr['file_name'],
                 'kompetensi12_name' =>$this->input->post('kompetensi12_name'),
                 'kompetensi12_desc' =>$this->input->post('kompetensi12_desc'),
                     );
                 $this->M_kompetensi12->edit($data);
             }
         }

         else
         {
           $data['kompetensi12_id'] = $this->input->post('kompetensi12_id');
           $data['kompetensi12_name'] = $this->input->post('kompetensi12_name');
           $data['kompetensi12_desc'] = $this->input->post('kompetensi12_desc');
           $data['kompetensi12_file'] = $this->input->post('kompetensi12_file');
         //call function
         $this->M_kompetensi12->edit($data);
         //redirect to page

        }
           redirect('Kompetensi12'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/kompetensi12/'.$this->input->post('kompetensi12_file'));
            $this->M_kompetensi12->delete($this->input->post('kompetensi12_id'));
        redirect('Kompetensi12');

    }
}
?>
