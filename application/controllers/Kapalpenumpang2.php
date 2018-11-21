<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kapalpenumpang2 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_kapalpenumpang2");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['kapalpenumpang2']=$this->M_kapalpenumpang2->tampil_data_kapalpenumpang2();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("kapalpenumpang2",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/kapalpenumpang2/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['kapalpenumpang2_file']['name'])
        {
            if ($this->upload->do_upload('kapalpenumpang2_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'kapalpenumpang2_file' =>$gbr['file_name'],
                  'kapalpenumpang2_name' =>$this->input->post('kapalpenumpang2_name'),
          'kapalpenumpang2_input' =>$this->input->post('kapalpenumpang2_input'),
          'kapalpenumpang2_verifikasi' =>$this->input->post('kapalpenumpang2_verifikasi'),
          'kapalpenumpang2_satuan' =>$this->input->post('kapalpenumpang2_satuan'),
          'kapalpenumpang2_sumber' =>$this->input->post('kapalpenumpang2_sumber'),
                    );
                $this->M_kapalpenumpang2->input($data);
            }
        }

        else
        {
        $data['kapalpenumpang2_name'] = $this->input->post('kapalpenumpang2_name');
        $data['kapalpenumpang2_input'] = $this->input->post('kapalpenumpang2_input');
        $data['kapalpenumpang2_verifikasi'] = $this->input->post('kapalpenumpang2_verifikasi');
        $data['kapalpenumpang2_satuan'] = $this->input->post('kapalpenumpang2_satuan');
        $data['kapalpenumpang2_sumber'] = $this->input->post('kapalpenumpang2_sumber');
        $data['kapalpenumpang2_file'] = $this->input->post('kapalpenumpang2_file');

        //call function
        $this->M_kapalpenumpang2->input($data);
        //redirect to page

      }
          redirect('kapalpenumpang2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/kapalpenumpang2/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['kapalpenumpang2_file']['name'])
         {
          unlink('./assets/kapalpenumpang2/'.$this->input->post('kapalpenumpang2_file'));
             if ($this->upload->do_upload('kapalpenumpang2_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'kapalpenumpang2_id' =>$this->input->post('kapalpenumpang2_id'),
        'kapalpenumpang2_file' =>$gbr['file_name'],
                 'kapalpenumpang2_name' =>$this->input->post('kapalpenumpang2_name'),
                 'kapalpenumpang2_input' =>$this->input->post('kapalpenumpang2_input'),
                 'kapalpenumpang2_verifikasi' =>$this->input->post('kapalpenumpang2_verifikasi'),
                 'kapalpenumpang2_satuan' =>$this->input->post('kapalpenumpang2_satuan'),
                 'kapalpenumpang2_sumber' =>$this->input->post('kapalpenumpang2_sumber'),
                     );
                 $this->M_kapalpenumpang2->edit($data);
             }
         }

         else
         {
           $data['kapalpenumpang2_id'] = $this->input->post('kapalpenumpang2_id');
           $data['kapalpenumpang2_name'] = $this->input->post('kapalpenumpang2_name');
           $data['kapalpenumpang2_input'] = $this->input->post('kapalpenumpang2_input');
           $data['kapalpenumpang2_verifikasi'] = $this->input->post('kapalpenumpang2_verifikasi');
           $data['kapalpenumpang2_satuan'] = $this->input->post('kapalpenumpang2_satuan');
           $data['kapalpenumpang2_sumber'] = $this->input->post('kapalpenumpang2_sumber');
           $data['kapalpenumpang2_file'] = $this->input->post('kapalpenumpang2_file');
         //call function
         $this->M_kapalpenumpang2->edit($data);
         //redirect to page

        }
           redirect('kapalpenumpang2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/kapalpenumpang2/'.$this->input->post('kapalpenumpang2_file'));
            $this->M_kapalpenumpang2->delete($this->input->post('kapalpenumpang2_id'));
        redirect('kapalpenumpang2');

    }
}
?>
