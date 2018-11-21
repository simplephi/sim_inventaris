<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dermaga3 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_dermaga3");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['dermaga3']=$this->M_dermaga3->tampil_data_dermaga3();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("dermaga3",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/dermaga3/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['dermaga3_file']['name'])
        {
            if ($this->upload->do_upload('dermaga3_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'dermaga3_file' =>$gbr['file_name'],
                  'dermaga3_name' =>$this->input->post('dermaga3_name'),
          'dermaga3_input' =>$this->input->post('dermaga3_input'),
          'dermaga3_verifikasi' =>$this->input->post('dermaga3_verifikasi'),
          'dermaga3_satuan' =>$this->input->post('dermaga3_satuan'),
          'dermaga3_sumber' =>$this->input->post('dermaga3_sumber'),
                    );
                $this->M_dermaga3->input($data);
            }
        }

        else
        {
        $data['dermaga3_name'] = $this->input->post('dermaga3_name');
        $data['dermaga3_input'] = $this->input->post('dermaga3_input');
        $data['dermaga3_verifikasi'] = $this->input->post('dermaga3_verifikasi');
        $data['dermaga3_satuan'] = $this->input->post('dermaga3_satuan');
        $data['dermaga3_sumber'] = $this->input->post('dermaga3_sumber');
        $data['dermaga3_file'] = $this->input->post('dermaga3_file');

        //call function
        $this->M_dermaga3->input($data);
        //redirect to page

      }
          redirect('dermaga3'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/dermaga3/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['dermaga3_file']['name'])
         {
          unlink('./assets/dermaga3/'.$this->input->post('dermaga3_file'));
             if ($this->upload->do_upload('dermaga3_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'dermaga3_id' =>$this->input->post('dermaga3_id'),
        'dermaga3_file' =>$gbr['file_name'],
                 'dermaga3_name' =>$this->input->post('dermaga3_name'),
                 'dermaga3_input' =>$this->input->post('dermaga3_input'),
                 'dermaga3_verifikasi' =>$this->input->post('dermaga3_verifikasi'),
                 'dermaga3_satuan' =>$this->input->post('dermaga3_satuan'),
                 'dermaga3_sumber' =>$this->input->post('dermaga3_sumber'),
                     );
                 $this->M_dermaga3->edit($data);
             }
         }

         else
         {
           $data['dermaga3_id'] = $this->input->post('dermaga3_id');
           $data['dermaga3_name'] = $this->input->post('dermaga3_name');
           $data['dermaga3_input'] = $this->input->post('dermaga3_input');
           $data['dermaga3_verifikasi'] = $this->input->post('dermaga3_verifikasi');
           $data['dermaga3_satuan'] = $this->input->post('dermaga3_satuan');
           $data['dermaga3_sumber'] = $this->input->post('dermaga3_sumber');
           $data['dermaga3_file'] = $this->input->post('dermaga3_file');
         //call function
         $this->M_dermaga3->edit($data);
         //redirect to page

        }
           redirect('dermaga3'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/dermaga3/'.$this->input->post('dermaga3_file'));
            $this->M_dermaga3->delete($this->input->post('dermaga3_id'));
        redirect('dermaga3');

    }
}
?>
