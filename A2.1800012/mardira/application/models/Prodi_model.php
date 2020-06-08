<?php

class Prodi_model extends CI_Model
{
	public function lihatData()
	{
		return $this->db->get('prodi')->result();
	}
}
