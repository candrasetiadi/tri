<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->_data['global'] = getGlobal();
        $this->load->model('home_m');
    }

    public function index()
    {
        $this->_data['title'] = 'Festival #Ambisiku';
        $this->_data['active'] = 'home';
        $this->_data['header'] = 'nav/home';
        $this->_data['content'] = 'index';
        $this->_data['script'] = 'script/home';
        $this->_data['video'] = json_encode($this->home_m->getAll());
        $this->_data['lastCerita'] = $this->home_m->getLastCerita();
        $this->_data['lastMentor'] = $this->home_m->getLastMentor();
        $this->_data['lastSebarkan'] = $this->home_m->getLastSebarkan();
        $this->load->view('master', $this->_data);
    }
}