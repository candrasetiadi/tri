<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Sebarkan extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->_data['global'] = getGlobal();
        $this->load->model('sebarkan_m');
    }

    public function index($slug = false)
    {
        $this->_data['title'] = 'Festival #Ambisiku';
        $this->_data['active'] = 'sebarkan';
        $this->_data['header'] = 'nav/page';
        if ($slug) {
            $this->_data['script'] = 'script/sebarkan-slug';
            $this->_data['content'] = 'detail';
            $this->_data['sebar'] = $this->sebarkan_m->getSebarkan($slug);
            $this->_data['other'] = $this->sebarkan_m->getOtherSebarkan($this->_data['sebar']['id']);
            $nextSebarkan = $this->sebarkan_m->nextSebarkan(false, $this->_data['sebar']['id']);
            $this->_data['next'] = $nextSebarkan;
        } else {
            $this->_data['script'] = 'script/sebarkan';
            $nextSebarkan = $this->sebarkan_m->nextSebarkan();
            $this->_data['next'] = $nextSebarkan;
            $this->_data['content'] = 'index';
            $this->_data['sebar'] = $this->sebarkan_m->getSebarkan($slug);
        }
        $this->load->view('master', $this->_data);
    }

    public function other($next, $id = false)
    {
        $sebarkan = $this->sebarkan_m->getOtherSebarkan($id, $next);
        $nextSebar = $this->sebarkan_m->nextSebarkan($next, $id);
        $response = array();

        foreach ($sebarkan as $sebar) {
            $response['data'][] = array(
                'judul' => $sebar['judul'],
                'tagline' => $sebar['tagline'],
                'url' => site_url('sebarkan-ambisiku/' . $sebar['slug']),
                'thumbnail' => base_url($sebar['thumbnail'])
            );
        }
        $response['next'] = $nextSebar;

        exit(json_encode($response));
    }
}