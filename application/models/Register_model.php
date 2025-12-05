<?php

class register_model extends CI_Model {


    public function check_phone_number($phone)
    {
        $this->db->select('*');
        $this->db->from('member');
        $this->db->where('member_phone', $phone);
        $query = $this->db->get();
        return $query;
    }

    public function check_email($email)
    {
        $this->db->select('*');
        $this->db->from('member');
        $this->db->where('member_email', $email);
        $query = $this->db->get();
        return $query;
    }

    public function check_code($code)
    {
        $this->db->select('*');
        $this->db->from('member');
        $this->db->where('member_code', $code);
        $query = $this->db->get();
        return $query;
    }

    public function save_member($insert)
    {
        $this->db->insert('member', $insert);
    }
}

?>