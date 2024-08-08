<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class usersModel extends CI_Model{

	function __construct() {
		parent::__construct();

	}

	function getUsers(){
		$data = $this->db->get('users');
		if ($data->num_rows() > 0){
			return $data;
		} else {
			return FALSE;
		}

	}

	function insertUser($data){
		$this->db->insert('users', $data);
		echo "Usuario insertado con ID = ". $this->db->insert_id();
	}

	function updateUser(){

	}

	function deleteUser(){

	}

	function getUserID(){

	}

}

?>