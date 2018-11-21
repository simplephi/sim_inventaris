<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dermaga2 extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_dermaga2");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['dermaga2']=$this->M_dermaga2->tampil_data_dermaga2();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("dermaga2",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/dermaga2/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['dermaga2_file']['name'])
        {
            if ($this->upload->do_upload('dermaga2_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'dermaga2_file' =>$gbr['file_name'],
                  'dermaga2_name' =>$this->input->post('dermaga2_name'),
          'dermaga2_input' =>$this->input->post('dermaga2_input'),
          'dermaga2_verifikasi' =>$this->input->post('dermaga2_verifikasi'),
          'dermaga2_satuan' =>$this->input->post('dermaga2_satuan'),
          'dermaga2_sumber' =>$this->input->post('dermaga2_sumber'),
                    );
                $this->M_dermaga2->input($data);
            }
        }

        else
        {
        $data['dermaga2_name'] = $this->input->post('dermaga2_name');
        $data['dermaga2_input'] = $this->input->post('dermaga2_input');
        $data['dermaga2_verifikasi'] = $this->input->post('dermaga2_verifikasi');
        $data['dermaga2_satuan'] = $this->input->post('dermaga2_satuan');
        $data['dermaga2_sumber'] = $this->input->post('dermaga2_sumber');
        $data['dermaga2_file'] = $this->input->post('dermaga2_file');

        //call function
        $this->M_dermaga2->input($data);
        //redirect to page

      }
          redirect('dermaga2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/dermaga2/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['dermaga2_file']['name'])
         {
          unlink('./assets/dermaga2/'.$this->input->post('dermaga2_file'));
             if ($this->upload->do_upload('dermaga2_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'dermaga2_id' =>$this->input->post('dermaga2_id'),
        'dermaga2_file' =>$gbr['file_name'],
                 'dermaga2_name' =>$this->input->post('dermaga2_name'),
                 'dermaga2_input' =>$this->input->post('dermaga2_input'),
                 'dermaga2_verifikasi' =>$this->input->post('dermaga2_verifikasi'),
                 'dermaga2_satuan' =>$this->input->post('dermaga2_satuan'),
                 'dermaga2_sumber' =>$this->input->post('dermaga2_sumber'),
                     );
                 $this->M_dermaga2->edit($data);
             }
         }

         else
         {
           $data['dermaga2_id'] = $this->input->post('dermaga2_id');
           $data['dermaga2_name'] = $this->input->post('dermaga2_name');
           $data['dermaga2_input'] = $this->input->post('dermaga2_input');
           $data['dermaga2_verifikasi'] = $this->input->post('dermaga2_verifikasi');
           $data['dermaga2_satuan'] = $this->input->post('dermaga2_satuan');
           $data['dermaga2_sumber'] = $this->input->post('dermaga2_sumber');
           $data['dermaga2_file'] = $this->input->post('dermaga2_file');
         //call function
         $this->M_dermaga2->edit($data);
         //redirect to page

        }
           redirect('dermaga2'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/dermaga2/'.$this->input->post('dermaga2_file'));
            $this->M_dermaga2->delete($this->input->post('dermaga2_id'));
        redirect('dermaga2');

    }
}
?>
