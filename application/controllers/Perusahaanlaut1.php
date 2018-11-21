<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Perusahaanlaut1 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_perusahaanlaut1");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['perusahaanlaut1']=$this->M_perusahaanlaut1->tampil_data_perusahaanlaut1();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("perusahaanlaut1",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/perusahaanlaut1/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['perusahaanlaut1_file']['name'])
        {
            if ($this->upload->do_upload('perusahaanlaut1_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'perusahaanlaut1_file' =>$gbr['file_name'],
                  'perusahaanlaut1_name' =>$this->input->post('perusahaanlaut1_name'),
          'perusahaanlaut1_input' =>$this->input->post('perusahaanlaut1_input'),
          'perusahaanlaut1_verifikasi' =>$this->input->post('perusahaanlaut1_verifikasi'),
          'perusahaanlaut1_satuan' =>$this->input->post('perusahaanlaut1_satuan'),
          'perusahaanlaut1_sumber' =>$this->input->post('perusahaanlaut1_sumber'),
                    );
                $this->M_perusahaanlaut1->input($data);
            }
        }

        else
        {
        $data['perusahaanlaut1_name'] = $this->input->post('perusahaanlaut1_name');
        $data['perusahaanlaut1_input'] = $this->input->post('perusahaanlaut1_input');
        $data['perusahaanlaut1_verifikasi'] = $this->input->post('perusahaanlaut1_verifikasi');
        $data['perusahaanlaut1_satuan'] = $this->input->post('perusahaanlaut1_satuan');
        $data['perusahaanlaut1_sumber'] = $this->input->post('perusahaanlaut1_sumber');
        $data['perusahaanlaut1_file'] = $this->input->post('perusahaanlaut1_file');

        //call function
        $this->M_perusahaanlaut1->input($data);
        //redirect to page

      }
          redirect('perusahaanlaut1'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/perusahaanlaut1/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['perusahaanlaut1_file']['name'])
         {
          unlink('./assets/perusahaanlaut1/'.$this->input->post('perusahaanlaut1_file'));
             if ($this->upload->do_upload('perusahaanlaut1_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'perusahaanlaut1_id' =>$this->input->post('perusahaanlaut1_id'),
        'perusahaanlaut1_file' =>$gbr['file_name'],
                 'perusahaanlaut1_name' =>$this->input->post('perusahaanlaut1_name'),
                 'perusahaanlaut1_input' =>$this->input->post('perusahaanlaut1_input'),
                 'perusahaanlaut1_verifikasi' =>$this->input->post('perusahaanlaut1_verifikasi'),
                 'perusahaanlaut1_satuan' =>$this->input->post('perusahaanlaut1_satuan'),
                 'perusahaanlaut1_sumber' =>$this->input->post('perusahaanlaut1_sumber'),
                     );
                 $this->M_perusahaanlaut1->edit($data);
             }
         }

         else
         {
           $data['perusahaanlaut1_id'] = $this->input->post('perusahaanlaut1_id');
           $data['perusahaanlaut1_name'] = $this->input->post('perusahaanlaut1_name');
           $data['perusahaanlaut1_input'] = $this->input->post('perusahaanlaut1_input');
           $data['perusahaanlaut1_verifikasi'] = $this->input->post('perusahaanlaut1_verifikasi');
           $data['perusahaanlaut1_satuan'] = $this->input->post('perusahaanlaut1_satuan');
           $data['perusahaanlaut1_sumber'] = $this->input->post('perusahaanlaut1_sumber');
           $data['perusahaanlaut1_file'] = $this->input->post('perusahaanlaut1_file');
         //call function
         $this->M_perusahaanlaut1->edit($data);
         //redirect to page

        }
           redirect('perusahaanlaut1'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/perusahaanlaut1/'.$this->input->post('perusahaanlaut1_file'));
            $this->M_perusahaanlaut1->delete($this->input->post('perusahaanlaut1_id'));
        redirect('perusahaanlaut1');

    }
}
?>
