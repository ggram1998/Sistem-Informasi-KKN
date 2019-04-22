<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	function index()
	{
		$data['title'] = "KKN - Dashboard";
		$this->load->view('home',$data);
	}
	
	function HalamanProfil()
	{
		$data['title'] = "KKN - Profil";
		$this->load->view('profil',$data);
	}
	function wali(){
		$data['title'] = "KKN - wali";
		$this->load->view('wali',$data);
	}
	function kuesioner(){
		$data['title'] = "KKN - Kuesioner";
		$this->load->view('kuesioner',$data);
	}
	function aduan(){
		$data['title'] = "KKN - aduan";
		$this->load->view('aduan',$data);
	}
	function catatan(){
		$data['title'] = "KKN - catatan";
		$this->load->view('catatan',$data);
	}
	function vidio(){
		$data['title'] = "KKN - vidio";
		$this->load->view('vidio',$data);
	}
	function harin(){
		$data['title'] = "KKN - harin";
		$this->load->view('harin',$data);
	}
	function akhir(){
		$data['title'] = "KKN - akhir";
		$this->load->view('akhir',$data);
	}
	function rencana(){
		$data['title'] = "KKN - rencana";
		$this->load->view('rencana',$data);
	}
	function desa(){
		$data['title'] = "KKN - akhir";
		$this->load->view('akhir',$data);
	}
	function home(){
		$data['title'] = "KKN - home";
		$this->load->view('home',$data);
	}
	function login(){
		$data['title'] = "KKN - login";
		$this->load->view('login',$data);
	}
	function register(){
		$data['title'] = "KKN - register";
		$this->load->view('register',$data);
	}
	function greetings(){
		$data['title'] = "KKN - greetings";
		$this->load->view('greetings',$data);
	}
	
}
