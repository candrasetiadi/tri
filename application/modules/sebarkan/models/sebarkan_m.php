<?php

class Sebarkan_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getSebarkan($slug = false, $next = false)
    {
        $perpage = 5;
        if ($next) {
            $skip = ($next - 1) * $perpage;
        } else {
            $skip = 0;
        }

        if ($slug) {
            $this->db->where('status', 1);
            $this->db->where('slug', $slug);
            $sebar = $this->db->get('sebarkan')->row_array();
        } else {
            $this->db->where('status', 1);
            $this->db->limit($perpage, $skip);
            $this->db->order_by('created_at', 'desc');
            $sebar = $this->db->get('sebarkan')->result_array();
        }

        return $sebar;
    }

    public function getOtherSebarkan($id, $next = false)
    {
        $perpage = 5;
        if ($next) {
            $skip = ($next - 1) * $perpage;
        } else {
            $skip = 0;
        }

        $this->db->where('status', 1);
        $this->db->limit($perpage, $skip);
        $this->db->where_not_in('id', array($id));
        $this->db->order_by('created_at', 'desc');
        $other = $this->db->get('sebarkan')->result_array();

        return $other;
    }

    public function nextSebarkan($next = false, $id = false)
    {
        $perpage = 5;
        if ($id) {
            $this->db->where_not_in('id', array($id));
        }
        $this->db->where('status', 1);
        $all = $this->db->get('sebarkan')->result_array();

        if ($next) {
            $current = $next;
        } else {
            $current = 1;
        }

        $nextSebarkan = $current + 1;

        if (count($all) <= $perpage) {
            $nextSebarkan = false;
        } else {
            if ($current > 1) {
                if (count($all) <= ($perpage * $current)) {
                    $nextSebarkan = false;
                }
            }
        }

        return $nextSebarkan;
    }
}
