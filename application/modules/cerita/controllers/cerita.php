<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Cerita extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->_data['global'] = getGlobal();
        $this->load->model('cerita_m');
    }

    public function index($slug = false)
    {
        $this->_data['title'] = 'Festival #Ambisiku';
        $this->_data['active'] = 'cerita';
        $this->_data['header'] = 'nav/page';
        $this->_data['script'] = 'script/cerita';
        $this->_data['content'] = 'index';
        $this->_data['last'] = $this->cerita_m->getCerita($slug);
        $this->_data['images'] = $this->cerita_m->getCeritaImages($this->_data['last']['id']);
        $this->_data['other'] = $this->cerita_m->getNext($this->_data['last']['id']);
        $this->_data['next'] = $this->cerita_m->nextCerita();
        $this->load->view('master', $this->_data);
    }

    public function next($next)
    {
        $last = $this->cerita_m->getCerita();
        $cerita = $this->cerita_m->getNext($last['id'], $next);
        $nextCerita = $this->cerita_m->nextCerita($next);
        $response = array();

        foreach ($cerita as $crt) {
            $response['data'][] = array(
                'title' => $crt['judul'],
                'description' => character_limiter($crt['tagline'], 70),
                'thumbnail' => $crt['thumbnail'],
                'slug' => $crt['slug'],
                'video' => $crt['video_url']
            );
        }
        $response['next'] = $nextCerita;

        exit(json_encode($response));
    }
}