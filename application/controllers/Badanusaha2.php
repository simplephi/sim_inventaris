<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Badanusaha2 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_badanusaha2");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['badanusaha2']=$this->M_badanusaha2->tampil_data_badanusaha2();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("badanusaha2",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/badanusaha2/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['badanusaha2_file']['name'])
        {
            if ($this->upload->do_upload('badanusaha2_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'badanusaha2_file' =>$gbr['file_name'],
                  'badanusaha2_name' =>$this->input->post('badanusaha2_name'),
          'badanusaha2_input' =>$this->input->post('badanusaha2_input'),
          'badanusaha2_verifikasi' =>$this->input->post('badanusaha2_verifikasi'),
          'badanusaha2_satuan' =>$this->input->post('badanusaha2_satuan'),
          'badanusaha2_sumber' =>$this->input->post('badanusaha2_sumber'),
                    );
                $this->M_badanusaha2->input($data);
            }
        }

        else
        {
        $data['badanusaha2_name'] = $this->input->post('badanusaha2_name');
        $data['badanusaha2_input'] = $this->input->post('badanusaha2_input');
        $data['badanusaha2_verifikasi'] = $this->input->post('badanusaha2_verifikasi');
        $data['badanusaha2_satuan'] = $this->input->post('badanusaha2_satuan');
        $data['badanusaha2_sumber'] = $this->input->post('badanusaha2_sumber');
        $data['badanusaha2_file'] = $this->input->post('badanusaha2_file');

        //call function
        $this->M_badanusaha2->input($data);
        //redirect to page

      }
          redirect('badanusaha2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/badanusaha2/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['badanusaha2_file']['name'])
         {
          unlink('./assets/badanusaha2/'.$this->input->post('badanusaha2_file'));
             if ($this->upload->do_upload('badanusaha2_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'badanusaha2_id' =>$this->input->post('badanusaha2_id'),
        'badanusaha2_file' =>$gbr['file_name'],
                 'badanusaha2_name' =>$this->input->post('badanusaha2_name'),
                 'badanusaha2_input' =>$this->input->post('badanusaha2_input'),
                 'badanusaha2_verifikasi' =>$this->input->post('badanusaha2_verifikasi'),
                 'badanusaha2_satuan' =>$this->input->post('badanusaha2_satuan'),
                 'badanusaha2_sumber' =>$this->input->post('badanusaha2_sumber'),
                     );
                 $this->M_badanusaha2->edit($data);
             }
         }

         else
         {
           $data['badanusaha2_id'] = $this->input->post('badanusaha2_id');
           $data['badanusaha2_name'] = $this->input->post('badanusaha2_name');
           $data['badanusaha2_input'] = $this->input->post('badanusaha2_input');
           $data['badanusaha2_verifikasi'] = $this->input->post('badanusaha2_verifikasi');
           $data['badanusaha2_satuan'] = $this->input->post('badanusaha2_satuan');
           $data['badanusaha2_sumber'] = $this->input->post('badanusaha2_sumber');
           $data['badanusaha2_file'] = $this->input->post('badanusaha2_file');
         //call function
         $this->M_badanusaha2->edit($data);
         //redirect to page

        }
           redirect('badanusaha2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/badanusaha2/'.$this->input->post('badanusaha2_file'));
            $this->M_badanusaha2->delete($this->input->post('badanusaha2_id'));
        redirect('badanusaha2');

    }
}
?>
