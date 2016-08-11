<?php

class Website_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getGlobalSetting()
    {
        $setting = $this->db->get('setting')->row_array();
        return $setting;
    }

    public function save()
    {
        $setting = $this->db->get('setting')->row_array();
        if (empty($setting)) {
            $this->db->insert('setting', array(
                'global_title' => $this->input->post('title'),
                'footer' => $this->input->post('footer'),
                'twitter_url' => $this->input->post('twitter_url'),
                'twitter_url_new' => $this->input->post('twitter-new') ? 1 : null,
                'facebook_url' => $this->input->post('facebook_url'),
                'facebook_url_new' => $this->input->post('facebook-new') ? 1 : null,
                'instagram_url' => $this->input->post('instagram_url'),
                'instagram_url_new' => $this->input->post('instagram-new') ? 1 : null,
            ));
        } else {
            $this->db->where('id', $setting['id']);
            $this->db->update('setting', array(
                'global_title' => $this->input->post('title'),
                'footer' => $this->input->post('footer'),
                'twitter_url' => $this->input->post('twitter_url'),
                'twitter_url_new' => $this->input->post('twitter-new') ? 1 : null,
                'facebook_url' => $this->input->post('facebook_url'),
                'facebook_url_new' => $this->input->post('facebook-new') ? 1 : null,
                'instagram_url' => $this->input->post('instagram_url'),
                'instagram_url_new' => $this->input->post('instagram-new') ? 1 : null,
            ));
        }
    }
}
