<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Kelas extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->_data['global'] = getGlobal();
        $this->load->model('kelas_m');
    }

    public function index($slug = false)
    {
        $this->_data['active'] = 'kelas';
        $this->_data['header'] = 'nav/page';
        $this->_data['content'] = 'index';
        $this->_data['script'] = 'script/kelas';
        $this->_data['mentor'] = $this->kelas_m->getMentor();
        $this->_data['nextMentor'] = $this->kelas_m->nextMentor();
        $this->_data['interview'] = $this->kelas_m->getVideo();
        $this->_data['nextVideo'] = $this->kelas_m->nextVideo();
        $this->load->view('master', $this->_data);
    }

    public function mentor($next)
    {
        $mentor = $this->kelas_m->getMentor($next);
        $nextMentor = $this->kelas_m->nextMentor($next);
        $response = array();

        foreach ($mentor as $ment) {
            $response['data'][] = array(
                'name' => $ment['name'],
                'description' => $ment['description'],
                'twitter' => $ment['twitter'],
                'conversation' => $ment['conversation'],
                'schedule' => $ment['schedule'] == null ? '--' : date('d F', strtotime($ment['schedule'])),
                'image' => base_url($ment['photo_url']),
            );
        }
        $response['nextMentor'] = $nextMentor;

        exit(json_encode($response));
    }

    public function video($next)
    {
        $video = $this->kelas_m->getVideo($next);
        $nextVideo = $this->kelas_m->nextVideo($next);
        $response = array();

        foreach ($video as $vid) {
            $response['data'][] = array(
                'name' => $vid['judul'],
                'description' => $vid['excerpt'],
                'video_id' => $vid['video_url'],
                'image' => base_url($vid['thumbnail']),
            );
        }
        $response['nextVideo'] = $nextVideo;

        exit(json_encode($response));
    }
}