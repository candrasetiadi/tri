<?php
class Home_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAll()
    {
        $this->db->where('status', 1);
        $video = $this->db->get('home')->result_array();
        $youtube = array();
        foreach ($video as $vid) {
            $youtube[] = $vid['video_url'];
        }

        return $youtube;
    }

    public function getLastCerita()
    {
        $this->db->where('status', 1);
        $this->db->order_by('id', 'desc');
        $last = $this->db->get('cerita')->row_array();
        return $last;
    }

    public function getLastMentor()
    {
        $new = date('Y-m-d');
        $this->db->where('status', 1);
        $this->db->where('schedule >=', $new);
        $this->db->order_by('schedule', 'asc');
        $last = $this->db->get('kelas_tenant')->row_array();
        if (!isset($last['id'])) {
            $this->db->where('status', 1);
            $this->db->order_by('schedule', 'desc');
            $last = $this->db->get('kelas_tenant')->row_array();
        }
        return $last;
    }

    public function getLastSebarkan()
    {
        $this->db->where('status', 1);
        $this->db->order_by('created_at', 'desc');
        $last = $this->db->get('sebarkan')->row_array();
        return $last;
    }
}