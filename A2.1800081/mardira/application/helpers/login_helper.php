<?php

function cek_session()
{
	$CI = &get_instance();
	$session = $CI->session->userdata('email');

	if ($session == null) {
		redirect('login');
	}
}
