<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

Class User extends CI_Model {
	function index() {
		return '';
	}

	function create_new($param) {
		$this->db->insert('user', $param);
	}
}

/* End of file homeModel.php */
/* Location: ./application/controllers/homeModel.php */