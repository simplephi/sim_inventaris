<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Keluar extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_keluar");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
          $data['keluar']=$this->M_keluar->tampil_data_keluar();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus");
          $this->load->view("keluar",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/keluar/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|doc|docx'; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M  
       $config['file_name'] = $nmfile; //nama yang terupload nantinya
      $this->load->library('upload', $config);
       $this->upload->initialize($config);

       if($_FILES['keluar_berkas']['name'])
        {
            if ($this->upload->do_upload('keluar_berkas'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'keluar_berkas' =>$gbr['file_name'],
                  'keluar_penerima' =>$this->input->post('keluar_penerima'),
          'keluar_tanggal' =>$this->input->post('keluar_tanggal'),
          'keluar_agenda' =>$this->input->post('keluar_agenda'),
          'keluar_nomor' =>$this->input->post('keluar_nomor'),
          'keluar_perihal' =>$this->input->post('keluar_perihal'),
                    );
                $this->M_keluar->input($data);
            }
        }

        else
        {
        $data['keluar_penerima'] = $this->input->post('keluar_penerima');
        $data['keluar_tanggal'] = $this->input->post('keluar_tanggal');
        $data['keluar_agenda'] = $this->input->post('keluar_agenda');
        $data['keluar_nomor'] = $this->input->post('keluar_nomor');
        $data['keluar_perihal'] = $this->input->post('keluar_perihal');
        

        //call function
        $this->M_keluar->input($data);
        //redirect to page

      }
          redirect('keluar'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
        $this->load->library('upload', $config);
        //get data
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/keluar/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|doc|docx'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
        $this->upload->initialize($config);

        if($_FILES['keluar_berkas']['name'])
         {
          unlink('./assets/keluar/'.$this->input->post('keluar_berkas'));
             if ($this->upload->do_upload('keluar_berkas'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
          'keluar_id' =>$this->input->post('keluar_id'),
          'keluar_berkas' =>$gbr['file_name'],
          'keluar_penerima' =>$this->input->post('keluar_penerima'),
          'keluar_tanggal' =>$this->input->post('keluar_tanggal'),
          'keluar_agenda' =>$this->input->post('keluar_agenda'),
          'keluar_nomor' =>$this->input->post('keluar_nomor'),
          'keluar_perihal' =>$this->input->post('keluar_perihal'),
                     );
                 $this->M_keluar->edit($data);
             }
         }

         else
         {
        $data['keluar_id'] = $this->input->post('keluar_id');
        $data['keluar_penerima'] = $this->input->post('keluar_penerima');
        $data['keluar_tanggal'] = $this->input->post('keluar_tanggal');
        $data['keluar_agenda'] = $this->input->post('keluar_agenda');
        $data['keluar_nomor'] = $this->input->post('keluar_nomor');
        $data['keluar_perihal'] = $this->input->post('keluar_perihal');
        $data['keluar_berkas'] = $this->input->post('keluar_berkas');
         //call function
         $this->M_keluar->edit($data);
         //redirect to page

        }
           redirect('keluar'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/keluar/'.$this->input->post('keluar_berkas'));
            $this->M_keluar->delete($this->input->post('keluar_id'));
        redirect('keluar');

    }
}
?>
