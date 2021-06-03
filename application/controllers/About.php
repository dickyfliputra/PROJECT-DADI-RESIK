<?php
defined('BASEPATH') or exit('No direct script access allowed');

class About extends CI_Controller
{
    // fungsi index
    public function index()
    {
        $data['title'] = 'About';
        $data['user'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
        $this->load->model('Menu_model', 'menu');

        $data['MenuUser'] = $this->menu->getMenuUser();
        $this->load->view('public/template/head', $data);
        $this->load->view('public/template/menu_head');
        $this->load->view('public/home/about');
        $this->load->view('public/template/end_content');
        $this->load->view('public/template/footer');
    }
}
