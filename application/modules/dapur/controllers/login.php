<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        notLogin();
    }

    public function index()
    {
        $this->_data['title'] = 'Login Admin - Festival #Ambisiku';
        $this->load->view('login', $this->_data);
    }

    public function action()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('email', 'User Email', 'trim|required|valid_email');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $post = $this->input->post();
            $this->db->where('status', 1);
            $this->db->where('email', $post['email']);
            $this->db->where('password', md5($post['password']));
            $login = $this->db->get('users')->row_array();
            if (empty($login)) {
                redirect('dapur/login');
            } else {
                $this->session->set_userdata('logedin', $login['id']);
                $this->session->set_userdata('username', $login['name']);
                redirect('dapur/dashboard');
            }
        }
    }
}