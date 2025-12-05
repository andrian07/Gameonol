<?php

class transaction_model extends CI_Model {


    public function get_transaction_by_user($user_id)
    {
        $this->db->select('*');
        $this->db->from('transaction');
        $this->db->where('transaction_member_id', $user_id);
        $query = $this->db->get();
        return $query;
    }
}

?>