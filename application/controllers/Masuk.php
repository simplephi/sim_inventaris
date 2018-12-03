<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Masuk extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_masuk");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
          $data['masuk']=$this->M_masuk->tampil_data_masuk();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus");
          $this->load->view("masuk",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/masuk/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M  
       $config['file_name'] = $nmfile; //nama yang terupload nantinya
      $this->load->library('upload', $config);
       $this->upload->initialize($config);

       if($_FILES['masuk_berkas']['name'])
        {
            if ($this->upload->do_upload('masuk_berkas'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'masuk_berkas' =>$gbr['file_name'],
                  'masuk_pengirim' =>$this->input->post('masuk_pengirim'),
          'masuk_tanggal' =>$this->input->post('masuk_tanggal'),
          'masuk_agenda' =>$this->input->post('masuk_agenda'),
          'masuk_nomor' =>$this->input->post('masuk_nomor'),
          'masuk_perihal' =>$this->input->post('masuk_perihal'),
          'masuk_keterangan' =>$this->input->post('masuk_keterangan'),
                    );
                $this->M_masuk->input($data);
            }
        }

        else
        {
        $data['masuk_pengirim'] = $this->input->post('masuk_pengirim');
        $data['masuk_tanggal'] = $this->input->post('masuk_tanggal');
        $data['masuk_agenda'] = $this->input->post('masuk_agenda');
        $data['masuk_nomor'] = $this->input->post('masuk_nomor');
        $data['masuk_perihal'] = $this->input->post('masuk_perihal');
        $data['masuk_keterangan'] = $this->input->post('masuk_keterangan');
        

        //call function
        $this->M_masuk->input($data);
        //redirect to page

      }
          redirect('masuk'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
        $this->load->library('upload', $config);
        //get data
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/masuk/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya
        $this->upload->initialize($config);

        if($_FILES['masuk_berkas']['name'])
         {
          unlink('./assets/masuk/'.$this->input->post('masuk_berkas'));
             if ($this->upload->do_upload('masuk_berkas'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
          'masuk_id' =>$this->input->post('masuk_id'),
          'masuk_berkas' =>$gbr['file_name'],
          'masuk_pengirim' =>$this->input->post('masuk_pengirim'),
          'masuk_tanggal' =>$this->input->post('masuk_tanggal'),
          'masuk_agenda' =>$this->input->post('masuk_agenda'),
          'masuk_nomor' =>$this->input->post('masuk_nomor'),
          'masuk_perihal' =>$this->input->post('masuk_perihal'),
          'masuk_keterangan' =>$this->input->post('masuk_keterangan'),
                     );
                 $this->M_masuk->edit($data);
             }
         }

         else
         {
        $data['masuk_id'] = $this->input->post('masuk_id');
        $data['masuk_pengirim'] = $this->input->post('masuk_pengirim');
        $data['masuk_tanggal'] = $this->input->post('masuk_tanggal');
        $data['masuk_agenda'] = $this->input->post('masuk_agenda');
        $data['masuk_nomor'] = $this->input->post('masuk_nomor');
        $data['masuk_perihal'] = $this->input->post('masuk_perihal');
        $data['masuk_berkas'] = $this->input->post('masuk_berkas');
        $data['masuk_keterangan'] = $this->input->post('masuk_keterangan');
         //call function
         $this->M_masuk->edit($data);
         //redirect to page

        }
           redirect('masuk'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/masuk/'.$this->input->post('masuk_berkas'));
            $this->M_masuk->delete($this->input->post('masuk_id'));
        redirect('masuk');

    }
    public function cetak(){
    ob_start();
    $data['masuk'] = $this->M_masuk->tampil_data_masuk();
    $this->load->view('attribute/masuk', $data);
    $html = ob_get_contents();
        ob_end_clean();

        require_once('./assets/html2pdf/html2pdf.class.php');
    //Versi PHP 7.2
    @$pdf = new HTML2PDF('L','F4','en');
    @$pdf->WriteHTML($html);
    @$pdf->Output('Data Surat Masuk.pdf', 'D');

/*
    Versi PHP 7.1
    $pdf = new HTML2PDF('L','F4','en');
    $pdf->WriteHTML($html);
    $pdf->Output('Data Pegawai.pdf', 'D');
*/  
    //ob_end_flush();
  }
}
?>
