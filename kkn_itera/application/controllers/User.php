<?php
defined('BASEPATH') or exit('No direct script access allowed');

class User extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where(
            'user',
            ['email' => $this->session->userdata('email')]
        )->row_array();
        $this->load->view('user/index',$data);

        $this->load->view('templates/mhs_header');
        $this->load->view('mhs/v_dashboard');
        $this->load->view('templates/mhs_footer');
    }
    public function aduan()
    {
        $this->load->view('templates/mhs_header');
        $this->load->view('mhs/v_aduan');
        $this->load->view('templates/mhs_footer');
    }
    public function akhir()
    {
        $this->load->view('templates/mhs_header');
        $this->load->view('mhs/v_akhir');
        $this->load->view('templates/mhs_footer');
    }
    public function catatan()
    {
        $this->load->view('templates/mhs_header');
        $this->load->view('mhs/v_catatan');
        $this->load->view('templates/mhs_footer');
    }
    public function desa()
    {
        $this->load->view('templates/mhs_header');
        $this->load->view('mhs/v_desa');
        $this->load->view('templates/mhs_footer');
    }
    public function harian()
    {
        $this->load->view('templates/mhs_header');
        $this->load->view('mhs/v_harian');
        $this->load->view('templates/mhs_footer');
    }
    public function kuesioner()
    {
        $this->load->view('templates/mhs_header');
        $this->load->view('mhs/v_kuesioner');
        $this->load->view('templates/mhs_footer');
    }
    public function rencana()
    {
        $this->load->view('templates/mhs_header');
        $this->load->view('mhs/v_rencana');
        $this->load->view('templates/mhs_footer');
    }
    public function wali()
    {
        $this->load->view('templates/mhs_header');
        $this->load->view('mhs/v_wali');
        $this->load->view('templates/mhs_footer');
    }
    public function profil()
    {
        $this->load->view('templates/mhs_header');
        $this->load->view('mhs/v_profil');
        $this->load->view('templates/mhs_footer');
    }
}
