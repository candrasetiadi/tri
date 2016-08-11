<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kelas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        isLogin();
        $this->load->model('kelas_m');
    }

    public function index()
    {
        $this->_data['title'] = 'Kelas Page - Festival #Ambisiku';
        $this->_data['active'] = 'kelas';
        $this->_data['content'] = 'pages/kelas';
        $this->_data['script_page_plugin'] = 'script/kelas_plugin';
        $this->_data['script_page'] = 'script/kelas';
        $this->_data['style_page'] = 'style/kelas';
        $this->_data['tenant'] = $this->kelas_m->getAllMentor();
        $this->_data['video'] = $this->kelas_m->getAllVideo();
        $this->load->view('layout', $this->_data);
    }

    public function mentor()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('mentor_name', 'Mentor Name', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $this->kelas_m->saveMentor();
            redirect('dapur/kelas');
        }
    }

    public function getMentor($id)
    {
        $mentor = $this->kelas_m->getById($id);
        exit( json_encode($mentor) );
    }

    public function destroyMentor($id)
    {
        $this->kelas_m->destroyMentor($id);
        redirect('dapur/kelas');
    }

    public function interview()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('youtube_url', 'Video ID', 'trim|required');
        $this->form_validation->set_rules('title', 'Video Title', 'trim|required');
        $this->form_validation->set_rules('description', 'Video Description', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $this->kelas_m->saveVideo();
            redirect('dapur/kelas');
        }
    }

    public function getVideo($id)
    {
        $video = $this->kelas_m->getVideoById($id);
        exit( json_encode($video) );
    }

    public function destroyVideo($id)
    {
        $this->kelas_m->destroyVideo($id);
        redirect('dapur/kelas');
    }
}