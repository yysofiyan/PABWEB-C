<?php

function cek_session()
{
    $CI = &get_intance();
    $session = $CI->session->userdata('email');
    if ($session == NULL) {
        redirect('login');
    }
}