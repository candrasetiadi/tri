<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        isLogin();
        $this->load->model('home_m');
    }

    public function index()
    {
        $this->_data['title'] = 'Home Page - Festival #Ambisiku';
        $this->_data['active'] = 'home';
        $this->_data['content'] = 'pages/home';
        $this->_data['script_page_plugin'] = 'script/home_plugin';
        $this->_data['script_page'] = 'script/user';
        $this->_data['style_page'] = 'style/user';
        $this->_data['video'] = $this->home_m->getHome();
        $this->load->view('layout', $this->_data);
    }

    public function save()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('youtube_url', 'Youtube ID', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $this->home_m->save();
            redirect('dapur/home');
        }
    }

    public function destroy($id)
    {
        $this->home_m->destroy($id);
        redirect('dapur/home');
    }
}