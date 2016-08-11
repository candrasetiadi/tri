<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Parade extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->_data['global'] = getGlobal();
    }

    public function index($slug = false)
    {
        $this->_data['title'] = 'Festival #Ambisiku';
        $this->_data['active'] = 'parade';
        $this->_data['header'] = 'nav/page';
        $this->_data['content'] = 'index';
        $this->load->view('master', $this->_data);
    }

    public function kejar()
    {
        $this->_data['title'] = 'Kejar #Ambisiku';
        $this->_data['active'] = 'parade';
        $this->_data['header'] = 'nav/page';
        $this->_data['content'] = 'kejar';
        $this->load->view('master', $this->_data);
    }

    public function talkshow()
    {
        
    }

    public function workshop()
    {
        
    }

    public function bazar()
    {
        
    }

    public function musik_seni()
    {
        
    }

    public function email()
    {
        $this->_data['title'] = 'Kejar #Ambisiku';
        $this->_data['active'] = 'parade';
        $this->_data['header'] = 'nav/page';
        $this->load->view('email_content', $this->_data);
    }
}