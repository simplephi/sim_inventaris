<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dermaga1 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_dermaga1");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['dermaga1']=$this->M_dermaga1->tampil_data_dermaga1();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("dermaga1",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/dermaga1/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['dermaga1_file']['name'])
        {
            if ($this->upload->do_upload('dermaga1_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'dermaga1_file' =>$gbr['file_name'],
                  'dermaga1_name' =>$this->input->post('dermaga1_name'),
          'dermaga1_input' =>$this->input->post('dermaga1_input'),
          'dermaga1_verifikasi' =>$this->input->post('dermaga1_verifikasi'),
          'dermaga1_satuan' =>$this->input->post('dermaga1_satuan'),
          'dermaga1_sumber' =>$this->input->post('dermaga1_sumber'),
                    );
                $this->M_dermaga1->input($data);
            }
        }

        else
        {
        $data['dermaga1_name'] = $this->input->post('dermaga1_name');
        $data['dermaga1_input'] = $this->input->post('dermaga1_input');
        $data['dermaga1_verifikasi'] = $this->input->post('dermaga1_verifikasi');
        $data['dermaga1_satuan'] = $this->input->post('dermaga1_satuan');
        $data['dermaga1_sumber'] = $this->input->post('dermaga1_sumber');
        $data['dermaga1_file'] = $this->input->post('dermaga1_file');

        //call function
        $this->M_dermaga1->input($data);
        //redirect to page

      }
          redirect('dermaga1'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/dermaga1/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['dermaga1_file']['name'])
         {
          unlink('./assets/dermaga1/'.$this->input->post('dermaga1_file'));
             if ($this->upload->do_upload('dermaga1_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'dermaga1_id' =>$this->input->post('dermaga1_id'),
        'dermaga1_file' =>$gbr['file_name'],
                 'dermaga1_name' =>$this->input->post('dermaga1_name'),
                 'dermaga1_input' =>$this->input->post('dermaga1_input'),
                 'dermaga1_verifikasi' =>$this->input->post('dermaga1_verifikasi'),
                 'dermaga1_satuan' =>$this->input->post('dermaga1_satuan'),
                 'dermaga1_sumber' =>$this->input->post('dermaga1_sumber'),
                     );
                 $this->M_dermaga1->edit($data);
             }
         }

         else
         {
           $data['dermaga1_id'] = $this->input->post('dermaga1_id');
           $data['dermaga1_name'] = $this->input->post('dermaga1_name');
           $data['dermaga1_input'] = $this->input->post('dermaga1_input');
           $data['dermaga1_verifikasi'] = $this->input->post('dermaga1_verifikasi');
           $data['dermaga1_satuan'] = $this->input->post('dermaga1_satuan');
           $data['dermaga1_sumber'] = $this->input->post('dermaga1_sumber');
           $data['dermaga1_file'] = $this->input->post('dermaga1_file');
         //call function
         $this->M_dermaga1->edit($data);
         //redirect to page

        }
           redirect('dermaga1'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/dermaga1/'.$this->input->post('dermaga1_file'));
            $this->M_dermaga1->delete($this->input->post('dermaga1_id'));
        redirect('dermaga1');

    }
}
?>
