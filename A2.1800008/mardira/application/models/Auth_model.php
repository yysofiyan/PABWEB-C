<?php

class Auth_model extends CI_Model
{
	public function cekUser($data)
	{
		return $this->db->get_where('users', $data);
	}
}
