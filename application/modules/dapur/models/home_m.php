<?php

class Home_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getHome()
    {
        $this->db->where('status', 1);
        $home = $this->db->get('home')->result_array();
        return $home;
    }

    public function save()
    {
        $post = $this->input->post();

        if ($post['id']) {
            $this->db->where('id', $post['id']);
            $this->db->update('home', array(
                'video_url' => $post['youtube_url']
            ));
        } else {
            $this->db->insert('home', array(
                'video_url' => $post['youtube_url']
            ));
        }
    }

    public function destroy($id)
    {
        $this->db->where('id', $id);
        $this->db->update('home', array(
            'status' => 0
        ));
    }
}
