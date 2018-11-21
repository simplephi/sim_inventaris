<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Perusahaanlaut2 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_perusahaanlaut2");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['perusahaanlaut2']=$this->M_perusahaanlaut2->tampil_data_perusahaanlaut2();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("perusahaanlaut2",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/perusahaanlaut2/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['perusahaanlaut2_file']['name'])
        {
            if ($this->upload->do_upload('perusahaanlaut2_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'perusahaanlaut2_file' =>$gbr['file_name'],
                  'perusahaanlaut2_name' =>$this->input->post('perusahaanlaut2_name'),
          'perusahaanlaut2_input' =>$this->input->post('perusahaanlaut2_input'),
          'perusahaanlaut2_verifikasi' =>$this->input->post('perusahaanlaut2_verifikasi'),
          'perusahaanlaut2_satuan' =>$this->input->post('perusahaanlaut2_satuan'),
          'perusahaanlaut2_sumber' =>$this->input->post('perusahaanlaut2_sumber'),
                    );
                $this->M_perusahaanlaut2->input($data);
            }
        }

        else
        {
        $data['perusahaanlaut2_name'] = $this->input->post('perusahaanlaut2_name');
        $data['perusahaanlaut2_input'] = $this->input->post('perusahaanlaut2_input');
        $data['perusahaanlaut2_verifikasi'] = $this->input->post('perusahaanlaut2_verifikasi');
        $data['perusahaanlaut2_satuan'] = $this->input->post('perusahaanlaut2_satuan');
        $data['perusahaanlaut2_sumber'] = $this->input->post('perusahaanlaut2_sumber');
        $data['perusahaanlaut2_file'] = $this->input->post('perusahaanlaut2_file');

        //call function
        $this->M_perusahaanlaut2->input($data);
        //redirect to page

      }
          redirect('perusahaanlaut2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/perusahaanlaut2/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['perusahaanlaut2_file']['name'])
         {
          unlink('./assets/perusahaanlaut2/'.$this->input->post('perusahaanlaut2_file'));
             if ($this->upload->do_upload('perusahaanlaut2_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'perusahaanlaut2_id' =>$this->input->post('perusahaanlaut2_id'),
        'perusahaanlaut2_file' =>$gbr['file_name'],
                 'perusahaanlaut2_name' =>$this->input->post('perusahaanlaut2_name'),
                 'perusahaanlaut2_input' =>$this->input->post('perusahaanlaut2_input'),
                 'perusahaanlaut2_verifikasi' =>$this->input->post('perusahaanlaut2_verifikasi'),
                 'perusahaanlaut2_satuan' =>$this->input->post('perusahaanlaut2_satuan'),
                 'perusahaanlaut2_sumber' =>$this->input->post('perusahaanlaut2_sumber'),
                     );
                 $this->M_perusahaanlaut2->edit($data);
             }
         }

         else
         {
           $data['perusahaanlaut2_id'] = $this->input->post('perusahaanlaut2_id');
           $data['perusahaanlaut2_name'] = $this->input->post('perusahaanlaut2_name');
           $data['perusahaanlaut2_input'] = $this->input->post('perusahaanlaut2_input');
           $data['perusahaanlaut2_verifikasi'] = $this->input->post('perusahaanlaut2_verifikasi');
           $data['perusahaanlaut2_satuan'] = $this->input->post('perusahaanlaut2_satuan');
           $data['perusahaanlaut2_sumber'] = $this->input->post('perusahaanlaut2_sumber');
           $data['perusahaanlaut2_file'] = $this->input->post('perusahaanlaut2_file');
         //call function
         $this->M_perusahaanlaut2->edit($data);
         //redirect to page

        }
           redirect('perusahaanlaut2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/perusahaanlaut2/'.$this->input->post('perusahaanlaut2_file'));
            $this->M_perusahaanlaut2->delete($this->input->post('perusahaanlaut2_id'));
        redirect('perusahaanlaut2');

    }
}
?>
