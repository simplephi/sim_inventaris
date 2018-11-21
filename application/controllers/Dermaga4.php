<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dermaga4 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_dermaga4");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['dermaga4']=$this->M_dermaga4->tampil_data_dermaga4();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("dermaga4",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/dermaga4/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['dermaga4_file']['name'])
        {
            if ($this->upload->do_upload('dermaga4_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'dermaga4_file' =>$gbr['file_name'],
                  'dermaga4_name' =>$this->input->post('dermaga4_name'),
          'dermaga4_input' =>$this->input->post('dermaga4_input'),
          'dermaga4_verifikasi' =>$this->input->post('dermaga4_verifikasi'),
          'dermaga4_satuan' =>$this->input->post('dermaga4_satuan'),
          'dermaga4_sumber' =>$this->input->post('dermaga4_sumber'),
                    );
                $this->M_dermaga4->input($data);
            }
        }

        else
        {
        $data['dermaga4_name'] = $this->input->post('dermaga4_name');
        $data['dermaga4_input'] = $this->input->post('dermaga4_input');
        $data['dermaga4_verifikasi'] = $this->input->post('dermaga4_verifikasi');
        $data['dermaga4_satuan'] = $this->input->post('dermaga4_satuan');
        $data['dermaga4_sumber'] = $this->input->post('dermaga4_sumber');
        $data['dermaga4_file'] = $this->input->post('dermaga4_file');

        //call function
        $this->M_dermaga4->input($data);
        //redirect to page

      }
          redirect('dermaga4'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/dermaga4/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['dermaga4_file']['name'])
         {
          unlink('./assets/dermaga4/'.$this->input->post('dermaga4_file'));
             if ($this->upload->do_upload('dermaga4_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'dermaga4_id' =>$this->input->post('dermaga4_id'),
        'dermaga4_file' =>$gbr['file_name'],
                 'dermaga4_name' =>$this->input->post('dermaga4_name'),
                 'dermaga4_input' =>$this->input->post('dermaga4_input'),
                 'dermaga4_verifikasi' =>$this->input->post('dermaga4_verifikasi'),
                 'dermaga4_satuan' =>$this->input->post('dermaga4_satuan'),
                 'dermaga4_sumber' =>$this->input->post('dermaga4_sumber'),
                     );
                 $this->M_dermaga4->edit($data);
             }
         }

         else
         {
           $data['dermaga4_id'] = $this->input->post('dermaga4_id');
           $data['dermaga4_name'] = $this->input->post('dermaga4_name');
           $data['dermaga4_input'] = $this->input->post('dermaga4_input');
           $data['dermaga4_verifikasi'] = $this->input->post('dermaga4_verifikasi');
           $data['dermaga4_satuan'] = $this->input->post('dermaga4_satuan');
           $data['dermaga4_sumber'] = $this->input->post('dermaga4_sumber');
           $data['dermaga4_file'] = $this->input->post('dermaga4_file');
         //call function
         $this->M_dermaga4->edit($data);
         //redirect to page

        }
           redirect('dermaga4'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/dermaga4/'.$this->input->post('dermaga4_file'));
            $this->M_dermaga4->delete($this->input->post('dermaga4_id'));
        redirect('dermaga4');

    }
}
?>
