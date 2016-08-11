<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Errors extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->_data['global'] = getGlobal();
    }

    public function index()
    {
        $this->_data['title'] = 'Festival #Ambisiku';
        $this->_data['active'] = '';
        $this->_data['header'] = 'nav/page';
        $this->_data['content'] = '404_error';
        $this->load->view('error_404', $this->_data);
    }
}