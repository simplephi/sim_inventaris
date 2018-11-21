<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kapalbarang2 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_kapalbarang2");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['kapalbarang2']=$this->M_kapalbarang2->tampil_data_kapalbarang2();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("kapalbarang2",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/kapalbarang2/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['kapalbarang2_file']['name'])
        {
            if ($this->upload->do_upload('kapalbarang2_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'kapalbarang2_file' =>$gbr['file_name'],
                  'kapalbarang2_name' =>$this->input->post('kapalbarang2_name'),
          'kapalbarang2_input' =>$this->input->post('kapalbarang2_input'),
          'kapalbarang2_verifikasi' =>$this->input->post('kapalbarang2_verifikasi'),
          'kapalbarang2_satuan' =>$this->input->post('kapalbarang2_satuan'),
          'kapalbarang2_sumber' =>$this->input->post('kapalbarang2_sumber'),
                    );
                $this->M_kapalbarang2->input($data);
            }
        }

        else
        {
        $data['kapalbarang2_name'] = $this->input->post('kapalbarang2_name');
        $data['kapalbarang2_input'] = $this->input->post('kapalbarang2_input');
        $data['kapalbarang2_verifikasi'] = $this->input->post('kapalbarang2_verifikasi');
        $data['kapalbarang2_satuan'] = $this->input->post('kapalbarang2_satuan');
        $data['kapalbarang2_sumber'] = $this->input->post('kapalbarang2_sumber');
        $data['kapalbarang2_file'] = $this->input->post('kapalbarang2_file');

        //call function
        $this->M_kapalbarang2->input($data);
        //redirect to page

      }
          redirect('kapalbarang2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/kapalbarang2/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['kapalbarang2_file']['name'])
         {
          unlink('./assets/kapalbarang2/'.$this->input->post('kapalbarang2_file'));
             if ($this->upload->do_upload('kapalbarang2_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'kapalbarang2_id' =>$this->input->post('kapalbarang2_id'),
        'kapalbarang2_file' =>$gbr['file_name'],
                 'kapalbarang2_name' =>$this->input->post('kapalbarang2_name'),
                 'kapalbarang2_input' =>$this->input->post('kapalbarang2_input'),
                 'kapalbarang2_verifikasi' =>$this->input->post('kapalbarang2_verifikasi'),
                 'kapalbarang2_satuan' =>$this->input->post('kapalbarang2_satuan'),
                 'kapalbarang2_sumber' =>$this->input->post('kapalbarang2_sumber'),
                     );
                 $this->M_kapalbarang2->edit($data);
             }
         }

         else
         {
           $data['kapalbarang2_id'] = $this->input->post('kapalbarang2_id');
           $data['kapalbarang2_name'] = $this->input->post('kapalbarang2_name');
           $data['kapalbarang2_input'] = $this->input->post('kapalbarang2_input');
           $data['kapalbarang2_verifikasi'] = $this->input->post('kapalbarang2_verifikasi');
           $data['kapalbarang2_satuan'] = $this->input->post('kapalbarang2_satuan');
           $data['kapalbarang2_sumber'] = $this->input->post('kapalbarang2_sumber');
           $data['kapalbarang2_file'] = $this->input->post('kapalbarang2_file');
         //call function
         $this->M_kapalbarang2->edit($data);
         //redirect to page

        }
           redirect('kapalbarang2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/kapalbarang2/'.$this->input->post('kapalbarang2_file'));
            $this->M_kapalbarang2->delete($this->input->post('kapalbarang2_id'));
        redirect('kapalbarang2');

    }
}
?>
