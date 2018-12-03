<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Tlaut extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_tlaut");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['tlaut']=$this->M_tlaut->tampil_data_tlaut();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("tlaut",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
       $this->load->library('upload');
       $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
       $config['upload_path'] = './assets/tlaut/'; //path folder
       $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
       // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv"; //type yang dapat diakses bisa anda sesuaikan
       $config['max_size'] = '1024000'; //maksimum besar file 2M
       // $config['max_width']  = '9999'; //lebar maksimum 1288 px
       // $config['max_height']  = '9999'; //tinggi maksimu 768 px
       $config['file_name'] = $nmfile; //nama yang terupload nantinya

       $this->upload->initialize($config);

       if($_FILES['tlaut_file']['name'])
        {
            if ($this->upload->do_upload('tlaut_file'))
            {
                $gbr = $this->upload->data();
                $data = array(
               
        'tlaut_file' =>$gbr['file_name'],
                  'tlaut_name' =>$this->input->post('tlaut_name'),
          'tlaut_input' =>$this->input->post('tlaut_input'),
          'tlaut_verifikasi' =>$this->input->post('tlaut_verifikasi'),
          'tlaut_satuan' =>$this->input->post('tlaut_satuan'),
          'tlaut_sumber' =>$this->input->post('tlaut_sumber'),
                    );
                $this->M_tlaut->input($data);
            }
        }

        else
        {
        $data['tlaut_name'] = $this->input->post('tlaut_name');
        $data['tlaut_input'] = $this->input->post('tlaut_input');
        $data['tlaut_verifikasi'] = $this->input->post('tlaut_verifikasi');
        $data['tlaut_satuan'] = $this->input->post('tlaut_satuan');
        $data['tlaut_sumber'] = $this->input->post('tlaut_sumber');
        $data['tlaut_file'] = $this->input->post('tlaut_file');

        //call function
        $this->M_tlaut->input($data);
        //redirect to page

      }
          redirect('tlaut'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        //get data
        $this->load->library('upload');
        $nmfile = "file_".time(); //nama file saya beri nama langsung dan diikuti fungsi time
        $config['upload_path'] = './assets/tlaut/'; //path folder
        $config['allowed_types'] = 'gif|jpg|png|jpeg|bmp|pdf|docx|doc|xls|xlsx'; //type yang dapat diakses bisa anda sesuaikan
        // $config['allowed_types'] = "application/pdf|pdf|application/octet-stream|csv";
        $config['max_size'] = '1024000'; //maksimum besar file 2M
        // $config['max_width']  = '1288'; //lebar maksimum 1288 px
        // $config['max_height']  = '768'; //tinggi maksimu 768 px
        $config['file_name'] = $nmfile; //nama yang terupload nantinya

        $this->upload->initialize($config);

        if($_FILES['tlaut_file']['name'])
         {
          unlink('./assets/tlaut/'.$this->input->post('tlaut_file'));
             if ($this->upload->do_upload('tlaut_file'))
             {
                 $gbr = $this->upload->data();
                 $data = array(
        'tlaut_id' =>$this->input->post('tlaut_id'),
        'tlaut_file' =>$gbr['file_name'],
                 'tlaut_name' =>$this->input->post('tlaut_name'),
                 'tlaut_input' =>$this->input->post('tlaut_input'),
                 'tlaut_verifikasi' =>$this->input->post('tlaut_verifikasi'),
                 'tlaut_satuan' =>$this->input->post('tlaut_satuan'),
                 'tlaut_sumber' =>$this->input->post('tlaut_sumber'),
                     );
                 $this->M_tlaut->edit($data);
             }
         }

         else
         {
           $data['tlaut_id'] = $this->input->post('tlaut_id');
           $data['tlaut_name'] = $this->input->post('tlaut_name');
           $data['tlaut_input'] = $this->input->post('tlaut_input');
           $data['tlaut_verifikasi'] = $this->input->post('tlaut_verifikasi');
           $data['tlaut_satuan'] = $this->input->post('tlaut_satuan');
           $data['tlaut_sumber'] = $this->input->post('tlaut_sumber');
           $data['tlaut_file'] = $this->input->post('tlaut_file');
         //call function
         $this->M_tlaut->edit($data);
         //redirect to page

        }
           redirect('tlaut'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            unlink('./assets/tlaut/'.$this->input->post('tlaut_file'));
            $this->M_tlaut->delete($this->input->post('tlaut_id'));
        redirect('tlaut');

    }
            public function cetak(){
    ob_start();
    $data['tlaut'] = $this->M_tlaut->tampil_data_tlaut();
    $this->load->view('attribute/tlaut', $data);
    $html = ob_get_contents();
        ob_end_clean();

        require_once('./assets/html2pdf/html2pdf.class.php');
    //Versi PHP 7.2
    @$pdf = new HTML2PDF('L','F4','en');
    @$pdf->WriteHTML($html);
    @$pdf->Output('Data Transportasi Laut.pdf', 'D');

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
