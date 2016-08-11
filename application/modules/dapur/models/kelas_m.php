<?php

class Kelas_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllMentor()
    {
        $this->db->where('status <', 2);
        $this->db->order_by('(CASE WHEN schedule IS NULL THEN 1 ELSE 0 END), schedule, name', 'asc');
        $mentor = $this->db->get('kelas_tenant')->result_array();
        return $mentor;
    }

    public function saveMentor()
    {
        $post = $this->input->post();

        if ($_FILES['thumbnail']['error'] == 0) {
            $config['upload_path'] = './uploads/thumbnail';
            $config['allowed_types'] = 'gif|jpg|png|jpeg';
            $config['max_size'] = '1024';

            $this->load->library('upload');

            $this->upload->initialize($config);
            $thumbnail = array();
            if ($this->upload->do_upload('thumbnail')) {
                $thumbnail = $this->upload->data();
            } else {
                $thumbnail = array('error' => $this->upload->display_errors());
            }

            if (!empty($thumbnail)) {
                $thumbnailUrl = 'uploads/thumbnail/' . $thumbnail['file_name'];
            }
        }

        if ($_FILES['image']['error'] == 0) {
            $config2['upload_path'] = './uploads/mentor';
            $config2['allowed_types'] = 'gif|jpg|png|jpeg';
            $config2['max_size'] = '1024';

            $this->upload->initialize($config2);
            $image = array();
            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
            } else {
                $image = array('error' => $this->upload->display_errors());
            }

            if (!empty($image)) {
                $imageUrl = 'uploads/mentor/' . $image['file_name'];
            }
        }

        if ($post['mentor_id']) {
            $this->db->where('id', $post['mentor_id']);
            $this->db->update('kelas_tenant', array(
                'twitter' => $post['twitterID'],
                'name' => $post['mentor_name'],
                'description' => $post['mentor_description'],
                'status' => $post['status_mentor'],
                'schedule' => ($post['schedule']) ? implode('-', array_reverse(explode('-', $post['schedule']))) : null,
                'conversation' => ($post['conversation']) ? $post['conversation'] : null,
                'updated_at' => date('Y-m-d H:i:s')
            ));

            if (isset($imageUrl)) {
                $this->db->where('id', $post['mentor_id']);
                $this->db->update('kelas_tenant', array(
                    'photo_url' => $imageUrl,
                ));
            }

            if (isset($thumbnailUrl)) {
                $this->db->where('id', $post['mentor_id']);
                $this->db->update('kelas_tenant', array(
                    'photo' => $thumbnailUrl,
                ));
            }
        } else {
            $this->db->insert('kelas_tenant', array(
                'twitter' => $post['twitterID'],
                'name' => $post['mentor_name'],
                'description' => $post['mentor_description'],
                'photo' => isset($thumbnailUrl) ? $thumbnailUrl : null,
                'photo_url' => isset($imageUrl) ? $imageUrl : null,
                'schedule' => ($post['schedule']) ? implode('-', array_reverse(explode('-', $post['schedule']))) : null,
                'conversation' => ($post['conversation']) ? $post['conversation'] : null,
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ));
        }
    }

    public function destroyMentor($id)
    {
        $this->db->where('id', $id);
        $this->db->update('kelas_tenant', array(
            'status' => 2
        ));
    }

    public function getById($id)
    {
        $this->db->where('status <', 2);
        $this->db->where('id', $id);
        $mentor = $this->db->get('kelas_tenant')->row_array();
        $result = array(
            'id' => $mentor['id'],
            'name' => $mentor['name'],
            'description' => $mentor['description'],
            'twitter' => $mentor['twitter'],
            'conversation' => $mentor['conversation'],
            'schedule' => ($mentor['schedule']) ? date('d-m-Y', strtotime($mentor['schedule'])) : '',
            'thumbnail' => base_url($mentor['photo']),
            'image' => base_url($mentor['photo_url']),
            'status' => $mentor['status']
        );
        return $result;
    }

    public function getAllVideo()
    {
        $this->db->where('status <', 2);
        $this->db->order_by('created_at', 'desc');
        $mentor = $this->db->get('kelas_interview')->result_array();
        return $mentor;
    }

    public function getVideoById($id)
    {
        $this->db->where('status <', 2);
        $this->db->where('id', $id);
        $video = $this->db->get('kelas_interview')->row_array();
        return $video;
    }

    public function saveVideo()
    {
        $post = $this->input->post();

        if ($post['video_id']) {
            $this->db->where('status <', 2);
            $this->db->where('id', $post['video_id']);
            $this->db->update('kelas_interview', array(
                'judul' => $post['title'],
                'excerpt' => $post['description'],
                'video_url' => $post['youtube_url'],
                'thumbnail' => $post['video_thumbnail'],
                'status' => $post['status_video'],
                'updated_at' => date('Y-m-d H:i:s')
            ));
        } else {
            $this->db->insert('kelas_interview', array(
                'judul' => $post['title'],
                'excerpt' => $post['description'],
                'video_url' => $post['youtube_url'],
                'thumbnail' => $post['video_thumbnail'],
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ));
        }
    }

    public function destroyVideo($id)
    {
        $this->db->where('id', $id);
        $this->db->update('kelas_interview', array(
            'status' => 2
        ));
    }
}
