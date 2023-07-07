<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Role_model extends CI_Model
{
    public function get_data_by_id($role_id)
    {
        return $this->db->get_where('user_role', ['id' => $role_id])->row_array();
    }
    public function selectAll()
    {
        return $this->db->get('user_role')->result_array();
    }
}
