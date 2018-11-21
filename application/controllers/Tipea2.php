<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tipea2 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_tipea2");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['tipea2']=$this->M_tipea2->tampil_data_tipea2();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("tipea2",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/tipea2/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['tipea2_file']['name'])
        {
            if ($this->upload->do_upload('tipea2_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'tipea2_file' =>$gbr['file_name'],
                  'tipea2_name' =>$this->input->post('tipea2_name'),
          'tipea2_input' =>$this->input->post('tipea2_input'),
          'tipea2_verifikasi' =>$this->input->post('tipea2_verifikasi'),
          'tipea2_satuan' =>$this->input->post('tipea2_satuan'),
          'tipea2_sumber' =>$this->input->post('tipea2_sumber'),
                    );
                $this->M_tipea2->input($data);
            }
        }

        else
        {
        $data['tipea2_name'] = $this->input->post('tipea2_name');
        $data['tipea2_input'] = $this->input->post('tipea2_input');
        $data['tipea2_verifikasi'] = $this->input->post('tipea2_verifikasi');
        $data['tipea2_satuan'] = $this->input->post('tipea2_satuan');
        $data['tipea2_sumber'] = $this->input->post('tipea2_sumber');
        $data['tipea2_file'] = $this->input->post('tipea2_file');

        //call function
        $this->M_tipea2->input($data);
        //redirect to page

      }
          redirect('tipea2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/tipea2/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['tipea2_file']['name'])
         {
          unlink('./assets/tipea2/'.$this->input->post('tipea2_file'));
             if ($this->upload->do_upload('tipea2_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'tipea2_id' =>$this->input->post('tipea2_id'),
        'tipea2_file' =>$gbr['file_name'],
                 'tipea2_name' =>$this->input->post('tipea2_name'),
                 'tipea2_input' =>$this->input->post('tipea2_input'),
                 'tipea2_verifikasi' =>$this->input->post('tipea2_verifikasi'),
                 'tipea2_satuan' =>$this->input->post('tipea2_satuan'),
                 'tipea2_sumber' =>$this->input->post('tipea2_sumber'),
                     );
                 $this->M_tipea2->edit($data);
             }
         }

         else
         {
           $data['tipea2_id'] = $this->input->post('tipea2_id');
           $data['tipea2_name'] = $this->input->post('tipea2_name');
           $data['tipea2_input'] = $this->input->post('tipea2_input');
           $data['tipea2_verifikasi'] = $this->input->post('tipea2_verifikasi');
           $data['tipea2_satuan'] = $this->input->post('tipea2_satuan');
           $data['tipea2_sumber'] = $this->input->post('tipea2_sumber');
           $data['tipea2_file'] = $this->input->post('tipea2_file');
         //call function
         $this->M_tipea2->edit($data);
         //redirect to page

        }
           redirect('tipea2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/tipea2/'.$this->input->post('tipea2_file'));
            $this->M_tipea2->delete($this->input->post('tipea2_id'));
        redirect('tipea2');

    }
}
?>
