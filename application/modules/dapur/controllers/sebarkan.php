<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sebarkan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        isLogin();
        $this->load->model('sebarkan_m');
    }

    public function index()
    {
        $this->_data['title'] = 'Cerita Page - Festival #Ambisiku';
        $this->_data['active'] = 'sebarkan';
        $this->_data['content'] = 'pages/sebarkan';
        $this->_data['script_page_plugin'] = 'script/sebarkan_plugin';
        $this->_data['script_page'] = 'script/sebarkan';
        $this->_data['style_page'] = 'style/sebarkan';
        $this->_data['sebarkan'] = $this->sebarkan_m->getAllSebarkan();
        $this->load->view('layout', $this->_data);
    }

    public function edit($id)
    {
        $response = $this->sebarkan_m->getById($id);
        exit(json_encode($response));
    }

    public function save()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('title', 'Judul', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $this->sebarkan_m->save();
            redirect('dapur/sebarkan');
        }
    }

    public function destroy($id)
    {
        $this->sebarkan_m->destroy($id);
        redirect('dapur/sebarkan');
    }
}