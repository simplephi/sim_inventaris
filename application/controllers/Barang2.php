<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Barang2 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_barang2");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['barang2']=$this->M_barang2->tampil_data_barang2();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("barang2",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/barang2/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['barang2_file']['name'])
        {
            if ($this->upload->do_upload('barang2_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'barang2_file' =>$gbr['file_name'],
                  'barang2_name' =>$this->input->post('barang2_name'),
          'barang2_input' =>$this->input->post('barang2_input'),
          'barang2_verifikasi' =>$this->input->post('barang2_verifikasi'),
          'barang2_satuan' =>$this->input->post('barang2_satuan'),
          'barang2_sumber' =>$this->input->post('barang2_sumber'),
                    );
                $this->M_barang2->input($data);
            }
        }

        else
        {
        $data['barang2_name'] = $this->input->post('barang2_name');
        $data['barang2_input'] = $this->input->post('barang2_input');
        $data['barang2_verifikasi'] = $this->input->post('barang2_verifikasi');
        $data['barang2_satuan'] = $this->input->post('barang2_satuan');
        $data['barang2_sumber'] = $this->input->post('barang2_sumber');
        $data['barang2_file'] = $this->input->post('barang2_file');

        //call function
        $this->M_barang2->input($data);
        //redirect to page

      }
          redirect('barang2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/barang2/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['barang2_file']['name'])
         {
          unlink('./assets/barang2/'.$this->input->post('barang2_file'));
             if ($this->upload->do_upload('barang2_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'barang2_id' =>$this->input->post('barang2_id'),
        'barang2_file' =>$gbr['file_name'],
                 'barang2_name' =>$this->input->post('barang2_name'),
                 'barang2_input' =>$this->input->post('barang2_input'),
                 'barang2_verifikasi' =>$this->input->post('barang2_verifikasi'),
                 'barang2_satuan' =>$this->input->post('barang2_satuan'),
                 'barang2_sumber' =>$this->input->post('barang2_sumber'),
                     );
                 $this->M_barang2->edit($data);
             }
         }

         else
         {
           $data['barang2_id'] = $this->input->post('barang2_id');
           $data['barang2_name'] = $this->input->post('barang2_name');
           $data['barang2_input'] = $this->input->post('barang2_input');
           $data['barang2_verifikasi'] = $this->input->post('barang2_verifikasi');
           $data['barang2_satuan'] = $this->input->post('barang2_satuan');
           $data['barang2_sumber'] = $this->input->post('barang2_sumber');
           $data['barang2_file'] = $this->input->post('barang2_file');
         //call function
         $this->M_barang2->edit($data);
         //redirect to page

        }
           redirect('barang2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/barang2/'.$this->input->post('barang2_file'));
            $this->M_barang2->delete($this->input->post('barang2_id'));
        redirect('barang2');

    }
}
?>
