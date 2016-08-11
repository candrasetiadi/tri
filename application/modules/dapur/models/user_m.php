<?php

class User_m extends CI_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function getAllUser()
    {
        $this->db->where('status', 1);
        $users = $this->db->get('users')->result_array();
        return $users;
    }

    public function save()
    {
        if ($this->input->post('id')) {
            $this->db->where('status', 1);
            $this->db->where('id', $this->input->post('id'));
            $user = $this->db->get('users')->row_array();
            if (!empty($user)) {
                $this->db->where('id', $this->input->post('id'));
                $this->db->update('users', array(
                    'name' => $this->input->post('name'),
                    'email' => $this->input->post('email'),
                    'password' => ($this->input->post('password')) ? md5($this->input->post('password')) : $user['password'],
                    'updated_at' => date('Y-m-d H:i:s')
                ));
            }
        } else {
            $this->db->insert('users', array(
                'name' => $this->input->post('name'),
                'email' => $this->input->post('email'),
                'password' => md5($this->input->post('password')),
                'created_at' => date('Y-m-d H:i:s'),
                'updated_at' => date('Y-m-d H:i:s')
            ));
        }
    }

    public function getById($id)
    {
        $this->db->where('status', 1);
        $this->db->where('id', $id);
        $user = $this->db->get('users')->row_array();
        return $user;
    }

    public function destroy($id)
    {
        $this->db->where('id', $id);
        $this->db->update('users', array(
            'status' => 0
        ));
    }
}
