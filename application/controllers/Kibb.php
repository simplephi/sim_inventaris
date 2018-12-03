<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kibb extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_kibb");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['kibb']=$this->M_kibb->tampil_data_kibb();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("kibb",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
        $data['kibb_kode'] = $this->input->post('kibb_kode');
        $data['kibb_name'] = $this->input->post('kibb_name');
        $data['kibb_noreg'] = $this->input->post('kibb_noreg');
        $data['kibb_type'] = $this->input->post('kibb_type');
        $data['kibb_cc'] = $this->input->post('kibb_cc');
        $data['kibb_bahan'] = $this->input->post('kibb_bahan');
        $data['kibb_tahun'] = $this->input->post('kibb_tahun');
        $data['kibb_pabrik'] = $this->input->post('kibb_pabrik');
        $data['kibb_rangka'] = $this->input->post('kibb_rangka');
        $data['kibb_mesin'] = $this->input->post('kibb_mesin');
        $data['kibb_polisi'] = $this->input->post('kibb_polisi');
        $data['kibb_bpkb'] = $this->input->post('kibb_bpkb');
        $data['kibb_asal'] = $this->input->post('kibb_asal');
        $data['kibb_harga'] = $this->input->post('kibb_harga');
        $data['kibb_ket'] = $this->input->post('kibb_ket');

        //call function
        $this->M_kibb->input($data);
        //redirect to page
          redirect('kibb'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        $data['kibb_id'] = $this->input->post('kibb_id');
        $data['kibb_kode'] = $this->input->post('kibb_kode');
        $data['kibb_name'] = $this->input->post('kibb_name');
        $data['kibb_noreg'] = $this->input->post('kibb_noreg');
        $data['kibb_type'] = $this->input->post('kibb_type');
        $data['kibb_cc'] = $this->input->post('kibb_cc');
        $data['kibb_bahan'] = $this->input->post('kibb_bahan');
        $data['kibb_tahun'] = $this->input->post('kibb_tahun');
        $data['kibb_pabrik'] = $this->input->post('kibb_pabrik');
        $data['kibb_rangka'] = $this->input->post('kibb_rangka');
        $data['kibb_mesin'] = $this->input->post('kibb_mesin');
        $data['kibb_polisi'] = $this->input->post('kibb_polisi');
        $data['kibb_bpkb'] = $this->input->post('kibb_bpkb');
        $data['kibb_asal'] = $this->input->post('kibb_asal');
        $data['kibb_harga'] = $this->input->post('kibb_harga');
        $data['kibb_ket'] = $this->input->post('kibb_ket');

        //call function
        $this->M_kibb->edit($data);
        //redirect to page
          redirect('kibb'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            // unlink('./assets/kibb/'.$this->input->post('kibb_file'));
            $this->M_kibb->delete($this->input->post('kibb_id'));
        redirect('kibb');

    }
                public function cetak(){
    ob_start();
    $data['kibb'] = $this->M_kibb->tampil_data_kibb();
    $this->load->view('attribute/kibb', $data);
    $html = ob_get_contents();
        ob_end_clean();

        require_once('./assets/html2pdf/html2pdf.class.php');
    //Versi PHP 7.2
    @$pdf = new HTML2PDF('L','F4','en');
    @$pdf->WriteHTML($html);
    @$pdf->Output('Data KIB B Peralatan & Mesin.pdf', 'D');

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
