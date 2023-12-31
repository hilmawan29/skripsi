<?php

function is_logged_in() {
	$ci = get_instance();
	if(!$ci->session->userdata('email')) {
		redirect('auth');
	}else{
		$role_id = $ci->session->userdata('role_id');
		// die (var_dump($menu));


		$userAccess = $ci->db->get_where('user_access_menu', ['role_id' => $role_id]);

		if($userAccess->num_rows() < 1) {
			redirect('auth/blocked');
		}
	}
}

function check_access($role_id, $menu_id)
{
    $CI = get_instance();
    $CI->db->where('role_id', $role_id);
    $CI->db->where('menu_id', $menu_id);
    $result = $CI->db->get('user_access_menu');
    if ($result->num_rows() > 0) {
        return "checked='checked'";
    }
}

function active_check($is_active, $submenu_id)
{
    $CI = get_instance();
    $CI->db->where('is_active', $is_active);
    $CI->db->where('id', $submenu_id);
    $result = $CI->db->get('user_sub_menu');
    if ($result->num_rows() > 0) {
        return "checked='checked'";
    }
}

function myTruncate2($string, $limit, $break=" ", $pad="...")
{
  // return with no change if string is shorter than $limit
  if(strlen($string) <= $limit) return $string;

  $string = substr($string, 0, $limit);
  if(false !== ($breakpoint = strrpos($string, $break))) {
    $string = substr($string, 0, $breakpoint);
  }

  return $string . $pad;
}