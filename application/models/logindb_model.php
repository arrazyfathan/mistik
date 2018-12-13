<?php
class logindb_model extends CI_Model{
    //cek nip dan password petugas
    function auth_petugas($username,$password){
        $query=$this->db->query("SELECT * FROM petugas WHERE username='$username' AND password=MD5('$password') LIMIT 1");
        return $query;
    }
 
    //cek nim dan password bdpb
    function auth_bdpb($username,$password){
        $query=$this->db->query("SELECT * FROM bdpb WHERE nama='$username' AND password=MD5('$password') LIMIT 1");
        return $query;
    }
 
}