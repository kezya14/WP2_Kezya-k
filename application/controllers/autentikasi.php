<?php
class autentikasi extends CI_Controller
{

    public function index()
    {
        $this->load->view('template/aute_header');
        $this->load->view('autentikasi/login');
        $this->load->view('template/aute_footer');
    }
}
    