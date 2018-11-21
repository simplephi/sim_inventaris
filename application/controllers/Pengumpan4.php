<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pengumpan4 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_pengumpan4");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['pengumpan4']=$this->M_pengumpan4->tampil_data_pengumpan4();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("pengumpan4",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/pengumpan4/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['pengumpan4_file']['name'])
        {
            if ($this->upload->do_upload('pengumpan4_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'pengumpan4_file' =>$gbr['file_name'],
                  'pengumpan4_name' =>$this->input->post('pengumpan4_name'),
          'pengumpan4_input' =>$this->input->post('pengumpan4_input'),
          'pengumpan4_verifikasi' =>$this->input->post('pengumpan4_verifikasi'),
          'pengumpan4_satuan' =>$this->input->post('pengumpan4_satuan'),
          'pengumpan4_sumber' =>$this->input->post('pengumpan4_sumber'),
                    );
                $this->M_pengumpan4->input($data);
            }
        }

        else
        {
        $data['pengumpan4_name'] = $this->input->post('pengumpan4_name');
        $data['pengumpan4_input'] = $this->input->post('pengumpan4_input');
        $data['pengumpan4_verifikasi'] = $this->input->post('pengumpan4_verifikasi');
        $data['pengumpan4_satuan'] = $this->input->post('pengumpan4_satuan');
        $data['pengumpan4_sumber'] = $this->input->post('pengumpan4_sumber');
        $data['pengumpan4_file'] = $this->input->post('pengumpan4_file');

        //call function
        $this->M_pengumpan4->input($data);
        //redirect to page

      }
          redirect('pengumpan4'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/pengumpan4/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['pengumpan4_file']['name'])
         {
          unlink('./assets/pengumpan4/'.$this->input->post('pengumpan4_file'));
             if ($this->upload->do_upload('pengumpan4_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'pengumpan4_id' =>$this->input->post('pengumpan4_id'),
        'pengumpan4_file' =>$gbr['file_name'],
                 'pengumpan4_name' =>$this->input->post('pengumpan4_name'),
                 'pengumpan4_input' =>$this->input->post('pengumpan4_input'),
                 'pengumpan4_verifikasi' =>$this->input->post('pengumpan4_verifikasi'),
                 'pengumpan4_satuan' =>$this->input->post('pengumpan4_satuan'),
                 'pengumpan4_sumber' =>$this->input->post('pengumpan4_sumber'),
                     );
                 $this->M_pengumpan4->edit($data);
             }
         }

         else
         {
           $data['pengumpan4_id'] = $this->input->post('pengumpan4_id');
           $data['pengumpan4_name'] = $this->input->post('pengumpan4_name');
           $data['pengumpan4_input'] = $this->input->post('pengumpan4_input');
           $data['pengumpan4_verifikasi'] = $this->input->post('pengumpan4_verifikasi');
           $data['pengumpan4_satuan'] = $this->input->post('pengumpan4_satuan');
           $data['pengumpan4_sumber'] = $this->input->post('pengumpan4_sumber');
           $data['pengumpan4_file'] = $this->input->post('pengumpan4_file');
         //call function
         $this->M_pengumpan4->edit($data);
         //redirect to page

        }
           redirect('pengumpan4'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/pengumpan4/'.$this->input->post('pengumpan4_file'));
            $this->M_pengumpan4->delete($this->input->post('pengumpan4_id'));
        redirect('pengumpan4');

    }
}
?>
