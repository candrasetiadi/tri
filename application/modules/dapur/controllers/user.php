<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class User extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        isLogin();
        $this->load->model('user_m');
    }

    public function index()
    {
        $this->_data['title'] = 'User Setting - Festival #Ambisiku';
        $this->_data['active'] = 'user';
        $this->_data['content'] = 'pages/user';
        $this->_data['script_page_plugin'] = 'script/user_plugin';
        $this->_data['script_page'] = 'script/user';
        $this->_data['style_page'] = 'style/user';
        $this->_data['users'] = $this->user_m->getAllUser();
        $this->load->view('layout', $this->_data);
    }

    public function save()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('name', 'User Fullname', 'trim|required');
        $this->form_validation->set_rules('email', 'User Email', 'trim|required|valid_email');
        if (!$this->input->post('id')) {
            $this->form_validation->set_rules('password', 'Password', 'trim|required|matches[repassword]');
            $this->form_validation->set_rules('repassword', 'Confirmation Password', 'trim|required');
        }

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $this->user_m->save();
            redirect('dapur/user');
        }
    }

    public function getUser($id)
    {
        $user = $this->user_m->getById($id);
        $response = array(
            'id' => $user['id'],
            'name' => $user['name'],
            'email' => $user['email']
        );

        exit( json_encode($response) );
    }

    public function destroy($id)
    {
        $this->user_m->destroy($id);
        redirect('dapur/user');
    }
}