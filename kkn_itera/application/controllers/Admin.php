<?php
defined('BASEPATH') or exit('No direct script access allowed');

class admin extends CI_Controller
{
    public function index()
    {
        $this->load->view('templates/admin_header');
        $this->load->view('admin/v_dashboard');
        $this->load->view('templates/admin_footer');
    }
    public function ProfilDPL()
    {
        $this->load->view('templates/admin_header');
        $this->load->view('admin/v_profilDPL');
        $this->load->view('templates/admin_footer');
    }
    public function ProfilMHS()
    {
        $this->load->view('templates/admin_header');
        $this->load->view('admin/v_profilMHS');
        $this->load->view('templates/admin_footer');
    }
    public function Wali()
    {
        $this->load->view('templates/admin_header');
        $this->load->view('admin/v_wali');
        $this->load->view('templates/admin_footer');
    }
    public function Desa()
    {
        $this->load->view('templates/admin_header');
        $this->load->view('admin/v_desa');
        $this->load->view('templates/admin_footer');
    }
    public function Pengumuman()
    {
        $this->load->view('templates/admin_header');
        $this->load->view('admin/v_pengumuman');
        $this->load->view('templates/admin_footer');
    }
    public function Agenda()
    {
        $this->load->view('templates/admin_header');
        $this->load->view('admin/v_agenda');
        $this->load->view('templates/admin_footer');
    }
    public function Pengaduan()
    {
        $this->load->view('templates/admin_header');
        $this->load->view('admin/v_pengaduan');
        $this->load->view('templates/admin_footer');
    }
}
