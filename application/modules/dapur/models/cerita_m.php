<?php

class Cerita_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllCerita()
    {
        $this->db->where('status < ', 2);
        $cerita = $this->db->get('cerita')->result_array();
        return $cerita;
    }

    public function getById($id)
    {
        $this->db->where('status < ', 2);
        $this->db->where('id', $id);
        $cerita = $this->db->get('cerita')->row_array();
        return $cerita;
    }

    public function getCeritaImages($id)
    {
        $this->db->where('cerita_id', $id);
        $this->db->where('status <', 2);
        $images = $this->db->get('cerita_images')->result_array();

        $theImage = array();
        foreach ($images as $image) {
            $delUrl = site_url('dapur/cerita/delete/upload/' . $image['id']);
            $theImage['files'][] = array(
                'name' => basename($image['filename']),
                'url' => base_url($image['large']),
                'status' => $image['status'],
                'id' => $image['id'],
                'thumbnailUrl' => base_url($image['small']),
                'deleteUrl' => $delUrl,
                'deleteType' => 'DELETE'
            );
        }

        $imageCerita = json_encode($theImage, true);
        return $imageCerita;
    }

    public function save()
    {
        $post = $this->input->post();
        if ($post['id']) {
            $this->db->where('id', $post['id']);
            $this->db->update('cerita', array(
                'judul' => ($post['title']) ? $post['title'] : null,
                'slug' => ($post['title']) ? textToSlug($post['title']) : null,
                'tagline' => ($post['description']) ? $post['description'] : null,
                'video_url' => $post['youtube_url'],
                'thumbnail' => ($post['thumbnail']) ? $post['thumbnail'] : null,
                'twitter' => ($post['twitter']) ? $post['twitter'] : null,
                'instagram' => ($post['instagram']) ? $post['instagram'] : null,
                'facebook' => ($post['facebook']) ? $post['facebook'] : null,
                'status' => $post['status'],
                'updated_at' => date('Y-m-d H:i:s')
            ));
        } else {
            $this->db->insert('cerita', array(
                'judul' => ($post['title']) ? $post['title'] : null,
                'slug' => ($post['title']) ? textToSlug($post['title']) : null,
                'tagline' => $post['description'],
                'video_url' => $post['youtube_url'],
                'thumbnail' => ($post['thumbnail']) ? $post['thumbnail'] : null,
                'twitter' => ($post['twitter']) ? $post['twitter'] : null,
                'instagram' => ($post['instagram']) ? $post['instagram'] : null,
                'facebook' => ($post['facebook']) ? $post['facebook'] : null,
                'status' => 0,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ));
        }
    }
}
