<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Website extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        isLogin();
        $this->load->model('website_m');
    }

    public function index()
    {
        $this->_data['title'] = 'Website Setting - Festival #Ambisiku';
        $this->_data['active'] = 'website';
        $this->_data['content'] = 'pages/website';
        $this->_data['script_page_plugin'] = 'script/user_plugin';
        $this->_data['script_page'] = 'script/user';
        $this->_data['style_page'] = 'style/user';
        $this->_data['setting'] = $this->website_m->getGlobalSetting();
        $this->load->view('layout', $this->_data);
    }

    public function save()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('title', 'Website Title', 'trim|required');
        $this->form_validation->set_rules('footer', 'Footer Text', 'trim|required');
        $this->form_validation->set_rules('twitter_url', 'Twitter URL', 'trim|required');
        $this->form_validation->set_rules('facebook_url', 'Facebook URL', 'trim|required');
        $this->form_validation->set_rules('instagram_url', 'Instagram URL', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $this->website_m->save();
            redirect('dapur/website');
        }
    }

    public function openGraph()
    {
        $this->_data['title'] = 'Website Setting - Festival #Ambisiku';
        $this->_data['active'] = 'og';
        $this->_data['content'] = 'pages/open-graph';
        $this->_data['script_page_plugin'] = 'script/og_plugin';
        $this->_data['script_page'] = 'script/user';
        $this->_data['style_page'] = 'style/og';
        $this->_data['setting'] = $this->website_m->getGlobalSetting();
        $this->load->view('layout', $this->_data);
    }

    public function SaveOpenGraph()
    {
        $this->load->library('form_validation');
        $this->form_validation->set_rules('title', 'OG Title', 'trim|required');
        $this->form_validation->set_rules('description', 'OG Description', 'trim|required');

        if ($this->form_validation->run() == FALSE) {
            $this->index();
        } else {
            $setting = $this->website_m->getGlobalSetting();

            $config['upload_path'] = './uploads';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '1024';
            $config['max_width'] = '1024';
            $config['max_height'] = '768';

            $this->load->library('upload', $config);
            $ogImage = array();
            if ($this->upload->do_upload('thumbnail')) {
                $ogImage = $this->upload->data();
            }

            if (empty($setting)) {
                $this->db->insert('setting', array(
                    'def_og_title' => $this->input->post('title'),
                    'def_og_description' => $this->input->post('description'),
                    'def_og_image' => (!empty($ogImage)) ? 'uploads/' . $ogImage['file_name'] : null,
                ));
            } else {
                $this->db->where('id', $setting['id']);
                $this->db->update('setting', array(
                    'def_og_title' => $this->input->post('title'),
                    'def_og_description' => $this->input->post('description'),
                    'def_og_image' => (!empty($ogImage)) ? 'uploads/' . $ogImage['file_name'] : null,
                ));
            }

            redirect('dapur/open-graph');
        }
    }
}