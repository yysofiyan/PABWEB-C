<?php

function cek_session()
{
    $CI = &get_instance();
    $session = $CI->session->userdata('email');
    if ($session == NULL) {
        redirect('login');
    }
}