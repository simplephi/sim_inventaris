<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kapalpenumpang1 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_kapalpenumpang1");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['kapalpenumpang1']=$this->M_kapalpenumpang1->tampil_data_kapalpenumpang1();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("kapalpenumpang1",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/kapalpenumpang1/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['kapalpenumpang1_file']['name'])
        {
            if ($this->upload->do_upload('kapalpenumpang1_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'kapalpenumpang1_file' =>$gbr['file_name'],
                  'kapalpenumpang1_name' =>$this->input->post('kapalpenumpang1_name'),
          'kapalpenumpang1_input' =>$this->input->post('kapalpenumpang1_input'),
          'kapalpenumpang1_verifikasi' =>$this->input->post('kapalpenumpang1_verifikasi'),
          'kapalpenumpang1_satuan' =>$this->input->post('kapalpenumpang1_satuan'),
          'kapalpenumpang1_sumber' =>$this->input->post('kapalpenumpang1_sumber'),
                    );
                $this->M_kapalpenumpang1->input($data);
            }
        }

        else
        {
        $data['kapalpenumpang1_name'] = $this->input->post('kapalpenumpang1_name');
        $data['kapalpenumpang1_input'] = $this->input->post('kapalpenumpang1_input');
        $data['kapalpenumpang1_verifikasi'] = $this->input->post('kapalpenumpang1_verifikasi');
        $data['kapalpenumpang1_satuan'] = $this->input->post('kapalpenumpang1_satuan');
        $data['kapalpenumpang1_sumber'] = $this->input->post('kapalpenumpang1_sumber');
        $data['kapalpenumpang1_file'] = $this->input->post('kapalpenumpang1_file');

        //call function
        $this->M_kapalpenumpang1->input($data);
        //redirect to page

      }
          redirect('kapalpenumpang1'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/kapalpenumpang1/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['kapalpenumpang1_file']['name'])
         {
          unlink('./assets/kapalpenumpang1/'.$this->input->post('kapalpenumpang1_file'));
             if ($this->upload->do_upload('kapalpenumpang1_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'kapalpenumpang1_id' =>$this->input->post('kapalpenumpang1_id'),
        'kapalpenumpang1_file' =>$gbr['file_name'],
                 'kapalpenumpang1_name' =>$this->input->post('kapalpenumpang1_name'),
                 'kapalpenumpang1_input' =>$this->input->post('kapalpenumpang1_input'),
                 'kapalpenumpang1_verifikasi' =>$this->input->post('kapalpenumpang1_verifikasi'),
                 'kapalpenumpang1_satuan' =>$this->input->post('kapalpenumpang1_satuan'),
                 'kapalpenumpang1_sumber' =>$this->input->post('kapalpenumpang1_sumber'),
                     );
                 $this->M_kapalpenumpang1->edit($data);
             }
         }

         else
         {
           $data['kapalpenumpang1_id'] = $this->input->post('kapalpenumpang1_id');
           $data['kapalpenumpang1_name'] = $this->input->post('kapalpenumpang1_name');
           $data['kapalpenumpang1_input'] = $this->input->post('kapalpenumpang1_input');
           $data['kapalpenumpang1_verifikasi'] = $this->input->post('kapalpenumpang1_verifikasi');
           $data['kapalpenumpang1_satuan'] = $this->input->post('kapalpenumpang1_satuan');
           $data['kapalpenumpang1_sumber'] = $this->input->post('kapalpenumpang1_sumber');
           $data['kapalpenumpang1_file'] = $this->input->post('kapalpenumpang1_file');
         //call function
         $this->M_kapalpenumpang1->edit($data);
         //redirect to page

        }
           redirect('kapalpenumpang1'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/kapalpenumpang1/'.$this->input->post('kapalpenumpang1_file'));
            $this->M_kapalpenumpang1->delete($this->input->post('kapalpenumpang1_id'));
        redirect('kapalpenumpang1');

    }
}
?>
