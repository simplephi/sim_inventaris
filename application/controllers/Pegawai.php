<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Pegawai extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_pegawai");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['pegawai']=$this->M_pegawai->tampil_data_pegawai();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("pegawai",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/pegawai/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       $pegawai_kompetensi = implode(',',$this->input->post('pegawai_kompetensi'));
       $pegawai_formal = implode(',',$this->input->post('pegawai_formal'));
       $pegawai_fungsional = implode(',',$this->input->post('pegawai_fungsional'));

       if($_FILES['pegawai_file']['name'])
        {
            if ($this->upload->do_upload('pegawai_file'))
            {
                $gbr = $this->upload->data();
                $data = array(

                  'pegawai_file' =>$gbr['file_name'],
                    'pegawai_name' =>$this->input->post('pegawai_name'),
                    'pegawai_nip' =>$this->input->post('pegawai_nip'),
                    'pegawai_gol' =>$this->input->post('pegawai_gol'),
                    'pegawai_kompetensi' =>$pegawai_kompetensi,
                    'pegawai_formal' =>$pegawai_formal,
                    'pegawai_fungsional' =>$pegawai_fungsional,
                    );
                $this->M_pegawai->input($data);
            }
        }

        else
        {
        $data['pegawai_name'] = $this->input->post('pegawai_name');
        $data['pegawai_nip'] = $this->input->post('pegawai_nip');
        $data['pegawai_gol'] = $this->input->post('pegawai_gol');
        $data['pegawai_kompetensi'] = $pegawai_kompetensi;
        $data['pegawai_formal'] = $pegawai_formal;
        $data['pegawai_fungsional'] = $pegawai_fungsional;
        $data['pegawai_file'] = $this->input->post('pegawai_file');

        //call function
        $this->M_pegawai->input($data);
        //redirect to page

      }
          redirect('pegawai'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {

        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/pegawai/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        $pegawai_kompetensi = implode(',',$this->input->post('pegawai_kompetensi'));
        $pegawai_formal = implode(',',$this->input->post('pegawai_formal'));
        $pegawai_fungsional = implode(',',$this->input->post('pegawai_fungsional'));

        if($_FILES['pegawai_file']['name'])
         {
          unlink('./assets/pegawai/'.$this->input->post('pegawai_file'));
             if ($this->upload->do_upload('pegawai_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
                  'pegawai_id' =>$this->input->post('pegawai_id'),
                  'pegawai_file' =>$gbr['file_name'],
                  'pegawai_name' =>$this->input->post('pegawai_name'),
                  'pegawai_nip' =>$this->input->post('pegawai_nip'),
                  'pegawai_gol' =>$this->input->post('pegawai_gol'),
                  'pegawai_kompetensi' =>$pegawai_kompetensi,
                  'pegawai_formal' =>$pegawai_formal,
                  'pegawai_fungsional' =>$pegawai_fungsional,
                     );
                 $this->M_pegawai->edit($data);
             }
         }

         else
         {
         $data['pegawai_id'] =$this->input->post('pegawai_id');
         $data['pegawai_name'] = $this->input->post('pegawai_name');
        $data['pegawai_nip'] = $this->input->post('pegawai_nip');
        $data['pegawai_gol'] = $this->input->post('pegawai_gol');
        $data['pegawai_kompetensi'] = $pegawai_kompetensi;
        $data['pegawai_formal'] = $pegawai_formal;
        $data['pegawai_fungsional'] = $pegawai_fungsional;
        $data['pegawai_file'] = $this->input->post('pegawai_file');
         //call function
         $this->M_pegawai->edit($data);
         //redirect to page

        }
           redirect('pegawai'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/pegawai/'.$this->input->post('pegawai_file'));
            $this->M_pegawai->delete($this->input->post('pegawai_id'));
        redirect('pegawai');

    }
}
?>
