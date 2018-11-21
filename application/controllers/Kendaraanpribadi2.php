<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kendaraanpribadi2 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_kendaraanpribadi2");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['kendaraanpribadi2']=$this->M_kendaraanpribadi2->tampil_data_kendaraanpribadi2();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("kendaraanpribadi2",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/kendaraanpribadi2/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['kendaraanpribadi2_file']['name'])
        {
            if ($this->upload->do_upload('kendaraanpribadi2_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'kendaraanpribadi2_file' =>$gbr['file_name'],
                  'kendaraanpribadi2_name' =>$this->input->post('kendaraanpribadi2_name'),
          'kendaraanpribadi2_input' =>$this->input->post('kendaraanpribadi2_input'),
          'kendaraanpribadi2_verifikasi' =>$this->input->post('kendaraanpribadi2_verifikasi'),
          'kendaraanpribadi2_satuan' =>$this->input->post('kendaraanpribadi2_satuan'),
          'kendaraanpribadi2_sumber' =>$this->input->post('kendaraanpribadi2_sumber'),
                    );
                $this->M_kendaraanpribadi2->input($data);
            }
        }

        else
        {
        $data['kendaraanpribadi2_name'] = $this->input->post('kendaraanpribadi2_name');
        $data['kendaraanpribadi2_input'] = $this->input->post('kendaraanpribadi2_input');
        $data['kendaraanpribadi2_verifikasi'] = $this->input->post('kendaraanpribadi2_verifikasi');
        $data['kendaraanpribadi2_satuan'] = $this->input->post('kendaraanpribadi2_satuan');
        $data['kendaraanpribadi2_sumber'] = $this->input->post('kendaraanpribadi2_sumber');
        $data['kendaraanpribadi2_file'] = $this->input->post('kendaraanpribadi2_file');

        //call function
        $this->M_kendaraanpribadi2->input($data);
        //redirect to page

      }
          redirect('kendaraanpribadi2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/kendaraanpribadi2/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['kendaraanpribadi2_file']['name'])
         {
          unlink('./assets/kendaraanpribadi2/'.$this->input->post('kendaraanpribadi2_file'));
             if ($this->upload->do_upload('kendaraanpribadi2_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'kendaraanpribadi2_id' =>$this->input->post('kendaraanpribadi2_id'),
        'kendaraanpribadi2_file' =>$gbr['file_name'],
                 'kendaraanpribadi2_name' =>$this->input->post('kendaraanpribadi2_name'),
                 'kendaraanpribadi2_input' =>$this->input->post('kendaraanpribadi2_input'),
                 'kendaraanpribadi2_verifikasi' =>$this->input->post('kendaraanpribadi2_verifikasi'),
                 'kendaraanpribadi2_satuan' =>$this->input->post('kendaraanpribadi2_satuan'),
                 'kendaraanpribadi2_sumber' =>$this->input->post('kendaraanpribadi2_sumber'),
                     );
                 $this->M_kendaraanpribadi2->edit($data);
             }
         }

         else
         {
           $data['kendaraanpribadi2_id'] = $this->input->post('kendaraanpribadi2_id');
           $data['kendaraanpribadi2_name'] = $this->input->post('kendaraanpribadi2_name');
           $data['kendaraanpribadi2_input'] = $this->input->post('kendaraanpribadi2_input');
           $data['kendaraanpribadi2_verifikasi'] = $this->input->post('kendaraanpribadi2_verifikasi');
           $data['kendaraanpribadi2_satuan'] = $this->input->post('kendaraanpribadi2_satuan');
           $data['kendaraanpribadi2_sumber'] = $this->input->post('kendaraanpribadi2_sumber');
           $data['kendaraanpribadi2_file'] = $this->input->post('kendaraanpribadi2_file');
         //call function
         $this->M_kendaraanpribadi2->edit($data);
         //redirect to page

        }
           redirect('kendaraanpribadi2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/kendaraanpribadi2/'.$this->input->post('kendaraanpribadi2_file'));
            $this->M_kendaraanpribadi2->delete($this->input->post('kendaraanpribadi2_id'));
        redirect('kendaraanpribadi2');

    }
}
?>
