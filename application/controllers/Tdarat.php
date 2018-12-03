<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tdarat extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_tdarat");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['tdarat']=$this->M_tdarat->tampil_data_tdarat();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("tdarat",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/tdarat/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['tdarat_file']['name'])
        {
            if ($this->upload->do_upload('tdarat_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'tdarat_file' =>$gbr['file_name'],
                  'tdarat_name' =>$this->input->post('tdarat_name'),
          'tdarat_input' =>$this->input->post('tdarat_input'),
          'tdarat_verifikasi' =>$this->input->post('tdarat_verifikasi'),
          'tdarat_satuan' =>$this->input->post('tdarat_satuan'),
          'tdarat_sumber' =>$this->input->post('tdarat_sumber'),
                    );
                $this->M_tdarat->input($data);
            }
        }

        else
        {
        $data['tdarat_name'] = $this->input->post('tdarat_name');
        $data['tdarat_input'] = $this->input->post('tdarat_input');
        $data['tdarat_verifikasi'] = $this->input->post('tdarat_verifikasi');
        $data['tdarat_satuan'] = $this->input->post('tdarat_satuan');
        $data['tdarat_sumber'] = $this->input->post('tdarat_sumber');
        $data['tdarat_file'] = $this->input->post('tdarat_file');

        //call function
        $this->M_tdarat->input($data);
        //redirect to page

      }
          redirect('tdarat'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/tdarat/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['tdarat_file']['name'])
         {
          unlink('./assets/tdarat/'.$this->input->post('tdarat_file'));
             if ($this->upload->do_upload('tdarat_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'tdarat_id' =>$this->input->post('tdarat_id'),
        'tdarat_file' =>$gbr['file_name'],
                 'tdarat_name' =>$this->input->post('tdarat_name'),
                 'tdarat_input' =>$this->input->post('tdarat_input'),
                 'tdarat_verifikasi' =>$this->input->post('tdarat_verifikasi'),
                 'tdarat_satuan' =>$this->input->post('tdarat_satuan'),
                 'tdarat_sumber' =>$this->input->post('tdarat_sumber'),
                     );
                 $this->M_tdarat->edit($data);
             }
         }

         else
         {
           $data['tdarat_id'] = $this->input->post('tdarat_id');
           $data['tdarat_name'] = $this->input->post('tdarat_name');
           $data['tdarat_input'] = $this->input->post('tdarat_input');
           $data['tdarat_verifikasi'] = $this->input->post('tdarat_verifikasi');
           $data['tdarat_satuan'] = $this->input->post('tdarat_satuan');
           $data['tdarat_sumber'] = $this->input->post('tdarat_sumber');
           $data['tdarat_file'] = $this->input->post('tdarat_file');
         //call function
         $this->M_tdarat->edit($data);
         //redirect to page

        }
           redirect('tdarat'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/tdarat/'.$this->input->post('tdarat_file'));
            $this->M_tdarat->delete($this->input->post('tdarat_id'));
        redirect('tdarat');

    }
        public function cetak(){
    ob_start();
    $data['tdarat'] = $this->M_tdarat->tampil_data_tdarat();
    $this->load->view('attribute/tdarat', $data);
    $html = ob_get_contents();
        ob_end_clean();

        require_once('./assets/html2pdf/html2pdf.class.php');
    //Versi PHP 7.2
    @$pdf = new HTML2PDF('L','F4','en');
    @$pdf->WriteHTML($html);
    @$pdf->Output('Data Transportasi Darat.pdf', 'D');

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
