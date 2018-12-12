<?php

class Login_model extends CI_Model
{
    public function login($username, $password)
    {
        // $check = $this->db->get_where('donatur', array('username' => $username, 'password' => $password));

        $this->db->where('username', $username);
        $this->db->where('password', md5($password));
        $query = $this->db->get('donatur');

        if ($query->num_rows() > 0) {
            return true;
        } else {
            return false;
        }
    }
}