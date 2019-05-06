<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Dpl extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/dpl_header');
        $this->load->view('dpl/v_dpl');
        $this->load->view('templates/dpl_footer');
    }
    public function profil()
    {
        $this->load->view('templates/dpl_header');
        $this->load->view('dpl/v_dpl');
        $this->load->view('templates/dpl_footer');
    }
    public function Desa()
    {
        $this->load->view('templates/dpl_header');
        $this->load->view('dpl/v_Desa');
        $this->load->view('templates/dpl_footer');
    }
    public function Bidang_Keahlian()
    {
        $this->load->view('templates/dpl_header');
        $this->load->view('dpl/v_Bidang_Keahlian');
        $this->load->view('templates/dpl_footer');
    }
    public function Lihat_rencana()
    {
        $this->load->view('templates/dpl_header');
        $this->load->view('dpl/v_Lihat_rencana');
        $this->load->view('templates/dpl_footer');
    }
    public function nilai_mahasiswa()
    {
        $this->load->view('templates/dpl_header');
        $this->load->view('dpl/v_nilai_mahasiswa');
        $this->load->view('templates/dpl_footer');
    }
    public function pengaduan()
    {
        $this->load->view('templates/dpl_header');
        $this->load->view('dpl/v_pengaduan');
        $this->load->view('templates/dpl_footer');
    }
    public function akhir()
    {
        $this->load->view('templates/dpl_header');
        $this->load->view('dpl/v_laporan_akhir');
        $this->load->view('templates/dpl_footer');
    }
}
