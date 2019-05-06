<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
    public function index()
    {
        $this->load->view('home/v_home');
    }
    public function greetings()
    {
        $this->load->view('home/v_greetings');
    } 
}
