<?php
defined('BASEPATH') OR exit('No direct script access allowed');


	function user_login()
	{
	    $ci =& get_instance();
	    $userid_session = $ci->session->userdata('userid');
	    $ci->load->model('Admin_model','admin');
	    $q = $ci->admin->get($userid_session)->row();
	    return $q;
	} 

	function check_already_login()
	{
		$ci =& get_instance();
		$userid_session = $ci->session->userdata('userid');
		if ($userid_session) {
			redirect('dashboard','refresh');
		} 
	}

	function check_not_login()
	{
		$ci =& get_instance();
		$userid_session = $ci->session->userdata('userid');
		if (!$userid_session) {
			redirect('auth','refresh');
		}
	}
