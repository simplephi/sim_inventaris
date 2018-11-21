<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Perintis2 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_perintis2");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['perintis2']=$this->M_perintis2->tampil_data_perintis2();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("perintis2",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/perintis2/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['perintis2_file']['name'])
        {
            if ($this->upload->do_upload('perintis2_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'perintis2_file' =>$gbr['file_name'],
                  'perintis2_name' =>$this->input->post('perintis2_name'),
          'perintis2_input' =>$this->input->post('perintis2_input'),
          'perintis2_verifikasi' =>$this->input->post('perintis2_verifikasi'),
          'perintis2_satuan' =>$this->input->post('perintis2_satuan'),
          'perintis2_sumber' =>$this->input->post('perintis2_sumber'),
                    );
                $this->M_perintis2->input($data);
            }
        }

        else
        {
        $data['perintis2_name'] = $this->input->post('perintis2_name');
        $data['perintis2_input'] = $this->input->post('perintis2_input');
        $data['perintis2_verifikasi'] = $this->input->post('perintis2_verifikasi');
        $data['perintis2_satuan'] = $this->input->post('perintis2_satuan');
        $data['perintis2_sumber'] = $this->input->post('perintis2_sumber');
        $data['perintis2_file'] = $this->input->post('perintis2_file');

        //call function
        $this->M_perintis2->input($data);
        //redirect to page

      }
          redirect('perintis2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/perintis2/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['perintis2_file']['name'])
         {
          unlink('./assets/perintis2/'.$this->input->post('perintis2_file'));
             if ($this->upload->do_upload('perintis2_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'perintis2_id' =>$this->input->post('perintis2_id'),
        'perintis2_file' =>$gbr['file_name'],
                 'perintis2_name' =>$this->input->post('perintis2_name'),
                 'perintis2_input' =>$this->input->post('perintis2_input'),
                 'perintis2_verifikasi' =>$this->input->post('perintis2_verifikasi'),
                 'perintis2_satuan' =>$this->input->post('perintis2_satuan'),
                 'perintis2_sumber' =>$this->input->post('perintis2_sumber'),
                     );
                 $this->M_perintis2->edit($data);
             }
         }

         else
         {
           $data['perintis2_id'] = $this->input->post('perintis2_id');
           $data['perintis2_name'] = $this->input->post('perintis2_name');
           $data['perintis2_input'] = $this->input->post('perintis2_input');
           $data['perintis2_verifikasi'] = $this->input->post('perintis2_verifikasi');
           $data['perintis2_satuan'] = $this->input->post('perintis2_satuan');
           $data['perintis2_sumber'] = $this->input->post('perintis2_sumber');
           $data['perintis2_file'] = $this->input->post('perintis2_file');
         //call function
         $this->M_perintis2->edit($data);
         //redirect to page

        }
           redirect('perintis2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/perintis2/'.$this->input->post('perintis2_file'));
            $this->M_perintis2->delete($this->input->post('perintis2_id'));
        redirect('perintis2');

    }
}
?>
