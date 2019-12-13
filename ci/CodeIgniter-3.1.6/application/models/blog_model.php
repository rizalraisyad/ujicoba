<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog_model extends CI_Model {


	public function get_all_entries()
	{
		$this->load->database();
		$query = $this->db->get('post');
		return $query->result();
	}
}
