<?php

class Sebarkan_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllSebarkan()
    {
        $this->db->where('status <', 2);
        $this->db->order_by('created_at', 'desc');
        $sebar = $this->db->get('sebarkan')->result_array();
        return $sebar;
    }

    public function getById($id)
    {
        $this->db->where('status <', 2);
        $this->db->where('id', $id);
        $sebar = $this->db->get('sebarkan')->row_array();
        $response = array(
            'id' => $sebar['id'],
            'judul' => $sebar['judul'],
            'excerpt' => $sebar['excerpt'],
            'tagline' => $sebar['tagline'],
            'instagram' => $sebar['instagram'],
            'facebook' => $sebar['facebook'],
            'twitter' => $sebar['twitter'],
            'website' => $sebar['website'],
            'thumbnail' => base_url($sebar['thumbnail']),
            'image' => base_url($sebar['image']),
            'status' => $sebar['status'],
        );
        return $response;
    }

    public function save()
    {
        $post = $this->input->post();

        if ($_FILES['thumbnail']['error'] == 0) {
            $config['upload_path'] = './uploads/sebarkan/thumbnail';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '1024';
            $config['max_width'] = '1024';
            $config['max_height'] = '768';

            $this->load->library('upload');

            $this->upload->initialize($config);
            $thumbnail = array();
            if ($this->upload->do_upload('thumbnail')) {
                $thumbnail = $this->upload->data();
            }

            if (!empty($thumbnail)) {
                $thumbnailUrl = 'uploads/sebarkan/thumbnail/' . $thumbnail['file_name'];
            }
        }

        if ($_FILES['image']['error'] == 0) {
            $config2['upload_path'] = './uploads/sebarkan';
            $config2['allowed_types'] = 'gif|jpg|png|jpeg';
            $config2['max_size'] = '1024';
            $config2['max_width'] = '1024';
            $config2['max_height'] = '768';

            $this->upload->initialize($config2);
            $image = array();
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
            }

            if (!empty($image)) {
                $imageUrl = 'uploads/sebarkan/' . $image['file_name'];
            }
        }

        if ($post['id']) {
            $this->db->where('id', $post['id']);
            $this->db->update('sebarkan', array(
                'judul' => $post['title'],
                'slug' => textToSlug($post['title']),
                'tagline' => $post['tagline'],
                'excerpt' => $post['description'],
                'website' => $post['website'],
                'twitter' => $post['twitter'],
                'instagram' => $post['instagram'],
                'facebook' => $post['facebook'],
                'status' => $post['status'],
                'updated_at' => date('Y-m-d H:i:s'),
            ));

            if (isset($imageUrl)) {
                $this->db->where('id', $post['id']);
                $this->db->update('sebarkan', array(
                    'image' => $imageUrl,
                ));
            }
            if (isset($thumbnailUrl)) {
                $this->db->where('id', $post['id']);
                $this->db->update('sebarkan', array(
                    'thumbnail' => $thumbnailUrl,
                ));
            }
        } else {
            $this->db->insert('sebarkan', array(
                'judul' => $post['title'],
                'slug' => textToSlug($post['title']),
                'tagline' => $post['tagline'],
                'excerpt' => $post['description'],
                'website' => $post['website'],
                'twitter' => $post['twitter'],
                'instagram' => $post['instagram'],
                'facebook' => $post['facebook'],
                'image' => isset($imageUrl) ? $imageUrl : null,
                'thumbnail' => isset($thumbnailUrl) ? $thumbnailUrl : null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s'),
            ));
        }
    }

    public function destroy($id)
    {
        $this->db->where('id', $id);
        $this->db->update('sebarkan', array(
            'status' => 2
        ));
    }
}
