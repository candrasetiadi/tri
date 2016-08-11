<?php

class Kelas_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getMentor($next = false)
    {
        $perpage = 4;
        if ($next) {
            $skip = ($next - 1) * $perpage;
        } else {
            $skip = 0;
        }

        $this->db->where('status', 1);
        $this->db->limit($perpage, $skip);
        //$this->db->order_by('(CASE WHEN DATE(schedule) < CURRENT_DATE() THEN 1 ELSE 0 END), (CASE WHEN schedule IS NULL THEN 1 ELSE 0 END), schedule', 'asc');
        $this->db->order_by('schedule', 'desc');
        $mentor = $this->db->get('kelas_tenant')->result_array();
        return $mentor;
    }

    public function nextMentor($next = false)
    {
        $perpage = 4;
        $this->db->where('status', 1);
        $all = $this->db->get('kelas_tenant')->result_array();

        if ($next) {
            $current = $next;
        } else {
            $current = 1;
        }

        $nextMentor = $current + 1;

        if (count($all) <= $perpage) {
            $nextMentor = false;
        } else {
            if ($current > 1) {
                if (count($all) <= ($perpage*$current)) {
                    $nextMentor = false;
                }
            }
        }

        return $nextMentor;
    }

    public function getVideo($next = false)
    {
        $perpage = 4;
        if ($next) {
            $skip = ($next - 1) * $perpage;
        } else {
            $skip = 0;
        }

        $this->db->where('status', 1);
        $this->db->limit($perpage, $skip);
        $this->db->order_by('created_at', 'desc');
        $mentor = $this->db->get('kelas_interview')->result_array();
        return $mentor;
    }

    public function nextVideo($next = false)
    {
        $perpage = 4;
        $this->db->where('status', 1);
        $all = $this->db->get('kelas_interview')->result_array();

        if ($next) {
            $current = ($next - 1) * $perpage;
        } else {
            $current = 1;
        }

        $nextVideo = $current + 1;

        if (count($all) <= $perpage) {
            $nextVideo = false;
        } else {
            if ($current > 1) {
                if (count($all) <= ($perpage*$current)) {
                    $nextVideo = false;
                }
            }
        }

        return $nextVideo;
    }
}
