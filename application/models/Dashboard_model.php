<?php

class dashboard_model extends CI_Model {

    public function get_member_data($user_id)
    {
        $this->db->select('*');
        $this->db->from('member');
        $this->db->where('member_id', $user_id);
        $query = $this->db->get();
        return $query;
    }

    public function get_exchange_point_data()
    {
        $this->db->select('*');
        $this->db->from('ms_exchange_point');
        $this->db->where('ms_exchange_point_status', 'Y');
        $query = $this->db->get();
        return $query;
    }

    public function get_promo_data()
    {
        $this->db->select('*');
        $this->db->from('ms_promo_banner');
        $this->db->where('ms_promo_banner_active', 'Y');
        $query = $this->db->get();
        return $query;
    }

    public function get_turnament_info()
    {
        $this->db->select('*');
        $this->db->from('ms_turnament');
        $this->db->where('ms_turnament_active', 'Y');
        $query = $this->db->get();
        return $query;
    }

}

?>