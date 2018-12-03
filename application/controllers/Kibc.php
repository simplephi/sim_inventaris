<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kibc extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_kibc");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['kibc']=$this->M_kibc->tampil_data_kibc();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("kibc",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
        $data['kibc_name'] = $this->input->post('kibc_name');
        $data['kibc_kodeb'] = $this->input->post('kibc_kodeb');
        $data['kibc_noreg'] = $this->input->post('kibc_noreg');
        $data['kibc_bangunan'] = $this->input->post('kibc_bangunan');
        $data['kibc_bertingkat'] = $this->input->post('kibc_bertingkat');
        $data['kibc_beton'] = $this->input->post('kibc_beton');
        $data['kibc_lantai'] = $this->input->post('kibc_lantai');
        $data['kibc_letak'] = $this->input->post('kibc_letak');
        $data['kibc_tgldok'] = $this->input->post('kibc_tgldok');
        $data['kibc_nodok'] = $this->input->post('kibc_nodok');
        $data['kibc_luas'] = $this->input->post('kibc_luas');
        $data['kibc_status'] = $this->input->post('kibc_status');
        $data['kibc_kodet'] = $this->input->post('kibc_kodet');
        $data['kibc_asal'] = $this->input->post('kibc_asal');
        $data['kibc_harga'] = $this->input->post('kibc_harga');
        $data['kibc_ket'] = $this->input->post('kibc_ket');

        //call function
        $this->M_kibc->input($data);
        //redirect to page
          redirect('kibc'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        $data['kibc_id'] = $this->input->post('kibc_id');
        $data['kibc_name'] = $this->input->post('kibc_name');
        $data['kibc_kodeb'] = $this->input->post('kibc_kodeb');
        $data['kibc_noreg'] = $this->input->post('kibc_noreg');
        $data['kibc_bangunan'] = $this->input->post('kibc_bangunan');
        $data['kibc_bertingkat'] = $this->input->post('kibc_bertingkat');
        $data['kibc_beton'] = $this->input->post('kibc_beton');
        $data['kibc_lantai'] = $this->input->post('kibc_lantai');
        $data['kibc_letak'] = $this->input->post('kibc_letak');
        $data['kibc_tgldok'] = $this->input->post('kibc_tgldok');
        $data['kibc_nodok'] = $this->input->post('kibc_nodok');
        $data['kibc_luas'] = $this->input->post('kibc_luas');
        $data['kibc_status'] = $this->input->post('kibc_status');
        $data['kibc_kodet'] = $this->input->post('kibc_kodet');
        $data['kibc_asal'] = $this->input->post('kibc_asal');
        $data['kibc_harga'] = $this->input->post('kibc_harga');
        $data['kibc_ket'] = $this->input->post('kibc_ket');

        //call function
        $this->M_kibc->edit($data);
        //redirect to page
          redirect('kibc'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            // unlink('./assets/kibc/'.$this->input->post('kibc_file'));
            $this->M_kibc->delete($this->input->post('kibc_id'));
        redirect('kibc');

    }
                    public function cetak(){
    ob_start();
    $data['kibc'] = $this->M_kibc->tampil_data_kibc();
    $this->load->view('attribute/kibc', $data);
    $html = ob_get_contents();
        ob_end_clean();

        require_once('./assets/html2pdf/html2pdf.class.php');
    //Versi PHP 7.2
    @$pdf = new HTML2PDF('L','F4','en');
    @$pdf->WriteHTML($html);
    @$pdf->Output('Data KIB C Gedung & Bangunan.pdf', 'D');

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
