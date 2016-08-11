<?php

class Cerita_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getCerita($slug = false)
    {
        if ($slug) {
            $this->db->where('cerita.slug', $slug);
            $this->db->where('cerita.status', 1);
            $this->db->order_by('cerita.id', 'desc');
            $cerita = $this->db->get('cerita')->row_array();
        } else {
            $this->db->where('cerita.status', 1);
            $this->db->order_by('cerita.id', 'desc');
            $cerita = $this->db->get('cerita')->row_array();
        }

        return $cerita;
    }

    public function getNext($last, $next = false)
    {
        $perpage = 8;
        if ($next) {
            $skip = ($next - 1) * $perpage;
        } else {
            $skip = 0;
        }

        $this->db->where_not_in('id', array($last));
        $this->db->where('status', 1);
        $this->db->limit($perpage, $skip);
        $this->db->order_by('id', 'desc');
        $cerita = $this->db->get('cerita')->result_array();

        return $cerita;
    }

    public function nextCerita($next = false)
    {
        $perpage = 8;
        $this->db->where('status', 1);
        $all = $this->db->get('cerita')->result_array();

        if ($next) {
            $current = $next;
        } else {
            $current = 1;
        }

        $nextCerita = $current + 1;

        if (count($all) <= $perpage) {
            $nextCerita = false;
        } else {
            if ($current > 1) {
                if (count($all) <= ($perpage*$current)) {
                    $nextCerita = false;
                }
            }
        }

        return $nextCerita;
    }

    public function getCeritaImages($id)
    {
        $this->db->where('cerita_id', $id);
        $this->db->where('status', 1);
        $images = $this->db->get('cerita_images')->result_array();
        return $images;
    }

    public function getOther($id)
    {
        $perpage = 8;
        $this->db->where_not_in('id', array($id));
        $this->db->where('status', 1);
        $this->db->limit($perpage);
        $this->db->order_by('id', 'desc');
        $cerita = $this->db->get('cerita')->result_array();

        $this->db->where('status', 1);
        $total = $this->db->get('cerita')->result_array();

        $next = false;
        if (count($total) > $perpage) {
            $next = true;
        }

        $return = array(
            'cerita' => $cerita,
            'next' => $next
        );
        return $return;
    }
}
