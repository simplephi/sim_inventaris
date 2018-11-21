<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Perintis1 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_perintis1");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['perintis1']=$this->M_perintis1->tampil_data_perintis1();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("perintis1",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/perintis1/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['perintis1_file']['name'])
        {
            if ($this->upload->do_upload('perintis1_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'perintis1_file' =>$gbr['file_name'],
                  'perintis1_name' =>$this->input->post('perintis1_name'),
          'perintis1_input' =>$this->input->post('perintis1_input'),
          'perintis1_verifikasi' =>$this->input->post('perintis1_verifikasi'),
          'perintis1_satuan' =>$this->input->post('perintis1_satuan'),
          'perintis1_sumber' =>$this->input->post('perintis1_sumber'),
                    );
                $this->M_perintis1->input($data);
            }
        }

        else
        {
        $data['perintis1_name'] = $this->input->post('perintis1_name');
        $data['perintis1_input'] = $this->input->post('perintis1_input');
        $data['perintis1_verifikasi'] = $this->input->post('perintis1_verifikasi');
        $data['perintis1_satuan'] = $this->input->post('perintis1_satuan');
        $data['perintis1_sumber'] = $this->input->post('perintis1_sumber');
        $data['perintis1_file'] = $this->input->post('perintis1_file');

        //call function
        $this->M_perintis1->input($data);
        //redirect to page

      }
          redirect('perintis1'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/perintis1/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['perintis1_file']['name'])
         {
          unlink('./assets/perintis1/'.$this->input->post('perintis1_file'));
             if ($this->upload->do_upload('perintis1_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'perintis1_id' =>$this->input->post('perintis1_id'),
        'perintis1_file' =>$gbr['file_name'],
                 'perintis1_name' =>$this->input->post('perintis1_name'),
                 'perintis1_input' =>$this->input->post('perintis1_input'),
                 'perintis1_verifikasi' =>$this->input->post('perintis1_verifikasi'),
                 'perintis1_satuan' =>$this->input->post('perintis1_satuan'),
                 'perintis1_sumber' =>$this->input->post('perintis1_sumber'),
                     );
                 $this->M_perintis1->edit($data);
             }
         }

         else
         {
           $data['perintis1_id'] = $this->input->post('perintis1_id');
           $data['perintis1_name'] = $this->input->post('perintis1_name');
           $data['perintis1_input'] = $this->input->post('perintis1_input');
           $data['perintis1_verifikasi'] = $this->input->post('perintis1_verifikasi');
           $data['perintis1_satuan'] = $this->input->post('perintis1_satuan');
           $data['perintis1_sumber'] = $this->input->post('perintis1_sumber');
           $data['perintis1_file'] = $this->input->post('perintis1_file');
         //call function
         $this->M_perintis1->edit($data);
         //redirect to page

        }
           redirect('perintis1'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/perintis1/'.$this->input->post('perintis1_file'));
            $this->M_perintis1->delete($this->input->post('perintis1_id'));
        redirect('perintis1');

    }
}
?>
