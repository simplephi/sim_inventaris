<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dermaga extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_dermaga");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['dermaga']=$this->M_dermaga->tampil_data_dermaga();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("dermaga",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/dermaga/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['dermaga_file']['name'])
        {
            if ($this->upload->do_upload('dermaga_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'dermaga_file' =>$gbr['file_name'],
                  'dermaga_name' =>$this->input->post('dermaga_name'),
          'dermaga_input' =>$this->input->post('dermaga_input'),
          'dermaga_verifikasi' =>$this->input->post('dermaga_verifikasi'),
          'dermaga_satuan' =>$this->input->post('dermaga_satuan'),
          'dermaga_sumber' =>$this->input->post('dermaga_sumber'),
                    );
                $this->M_dermaga->input($data);
            }
        }

        else
        {
        $data['dermaga_name'] = $this->input->post('dermaga_name');
        $data['dermaga_input'] = $this->input->post('dermaga_input');
        $data['dermaga_verifikasi'] = $this->input->post('dermaga_verifikasi');
        $data['dermaga_satuan'] = $this->input->post('dermaga_satuan');
        $data['dermaga_sumber'] = $this->input->post('dermaga_sumber');
        $data['dermaga_file'] = $this->input->post('dermaga_file');

        //call function
        $this->M_dermaga->input($data);
        //redirect to page

      }
          redirect('dermaga'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/dermaga/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['dermaga_file']['name'])
         {
          unlink('./assets/dermaga/'.$this->input->post('dermaga_file'));
             if ($this->upload->do_upload('dermaga_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'dermaga_id' =>$this->input->post('dermaga_id'),
        'dermaga_file' =>$gbr['file_name'],
                 'dermaga_name' =>$this->input->post('dermaga_name'),
                 'dermaga_input' =>$this->input->post('dermaga_input'),
                 'dermaga_verifikasi' =>$this->input->post('dermaga_verifikasi'),
                 'dermaga_satuan' =>$this->input->post('dermaga_satuan'),
                 'dermaga_sumber' =>$this->input->post('dermaga_sumber'),
                     );
                 $this->M_dermaga->edit($data);
             }
         }

         else
         {
           $data['dermaga_id'] = $this->input->post('dermaga_id');
           $data['dermaga_name'] = $this->input->post('dermaga_name');
           $data['dermaga_input'] = $this->input->post('dermaga_input');
           $data['dermaga_verifikasi'] = $this->input->post('dermaga_verifikasi');
           $data['dermaga_satuan'] = $this->input->post('dermaga_satuan');
           $data['dermaga_sumber'] = $this->input->post('dermaga_sumber');
           $data['dermaga_file'] = $this->input->post('dermaga_file');
         //call function
         $this->M_dermaga->edit($data);
         //redirect to page

        }
           redirect('dermaga'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/dermaga/'.$this->input->post('dermaga_file'));
            $this->M_dermaga->delete($this->input->post('dermaga_id'));
        redirect('dermaga');

    }
}
?>
