<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Dashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        isLogin();
    }

    public function index()
    {
        $this->_data['title'] = 'Dashboard - Festival #Ambisiku';
        $this->_data['active'] = 'dashboard';
        $this->_data['content'] = '';
        $this->_data['script_page_plugin'] = '';
        $this->_data['script_page'] = '';
        $this->_data['style_page'] = '';
        $this->load->view('layout', $this->_data);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('dapur/login');
    }
}