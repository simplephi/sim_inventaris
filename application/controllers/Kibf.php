<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Kibf extends CI_Controller {
    function __construct() {
        parent::__construct();
        $this->load->model("M_kibf");
        $this->load->helper(array('form', 'url'));

    }

    public function index(){
      if(!($this->session->userdata('user_id'))){
          $this->load->view("login");
      }else{
        $data['user_id']=$this->session->userdata('group_id');
          $data['kibf']=$this->M_kibf->tampil_data_kibf();
          $this->load->view("attribute/header");
          $this->load->view("attribute/menus",$data);
          $this->load->view("kibf",$data);
          $this->load->view("attribute/footer");
      }
    }
public function input() {
        $data['kibf_name'] = $this->input->post('kibf_name');
        $data['kibf_bangunan'] = $this->input->post('kibf_bangunan');
        $data['kibf_bertingkat'] = $this->input->post('kibf_bertingkat');
        $data['kibf_beton'] = $this->input->post('kibf_beton');
        $data['kibf_luas'] = $this->input->post('kibf_luas');
        $data['kibf_letak'] = $this->input->post('kibf_letak');
        $data['kibf_tgldok'] = $this->input->post('kibf_tgldok');
        $data['kibf_nodok'] = $this->input->post('kibf_nodok');
        $data['kibf_tglmulai'] = $this->input->post('kibf_tglmulai');
        $data['kibf_status'] = $this->input->post('kibf_status');
        $data['kibf_kode'] = $this->input->post('kibf_kode');
        $data['kibf_asal'] = $this->input->post('kibf_asal');
        $data['kibf_nilai'] = $this->input->post('kibf_nilai');
        $data['kibf_ket'] = $this->input->post('kibf_ket');

        //call function
        $this->M_kibf->input($data);
        //redirect to page
          redirect('kibf'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function edit() {
      
        $data['kibf_id'] = $this->input->post('kibf_id');
        $data['kibf_name'] = $this->input->post('kibf_name');
        $data['kibf_bangunan'] = $this->input->post('kibf_bangunan');
        $data['kibf_bertingkat'] = $this->input->post('kibf_bertingkat');
        $data['kibf_beton'] = $this->input->post('kibf_beton');
        $data['kibf_luas'] = $this->input->post('kibf_luas');
        $data['kibf_letak'] = $this->input->post('kibf_letak');
        $data['kibf_tgldok'] = $this->input->post('kibf_tgldok');
        $data['kibf_nodok'] = $this->input->post('kibf_nodok');
        $data['kibf_tglmulai'] = $this->input->post('kibf_tglmulai');
        $data['kibf_status'] = $this->input->post('kibf_status');
        $data['kibf_kode'] = $this->input->post('kibf_kode');
        $data['kibf_asal'] = $this->input->post('kibf_asal');
        $data['kibf_nilai'] = $this->input->post('kibf_nilai');
        $data['kibf_ket'] = $this->input->post('kibf_ket');

        //call function
        $this->M_kibf->edit($data);
        //redirect to page
          redirect('kibf'); //jika berhasil maka akan ditampilkan view vupload
    }

    public function delete() {

            // unlink('./assets/kibf/'.$this->input->post('kibf_file'));
            $this->M_kibf->delete($this->input->post('kibf_id'));
        redirect('kibf');

    }
                        public function cetak(){
    ob_start();
    $data['kibf'] = $this->M_kibf->tampil_data_kibf();
    $this->load->view('attribute/kibf', $data);
    $html = ob_get_contents();
        ob_end_clean();

        require_once('./assets/html2pdf/html2pdf.class.php');
    //Versi PHP 7.2
    @$pdf = new HTML2PDF('L','F4','en');
    @$pdf->WriteHTML($html);
    @$pdf->Output('Data KIB F Konstruksi Dalam Pengerjaan.pdf', 'D');

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
