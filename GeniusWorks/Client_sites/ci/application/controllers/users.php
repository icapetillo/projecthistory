<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Users extends CI_Controller {

	function __construct() {
		parent::__construct();
		$this->load->model('usersModel');
	}

	public function addUser(){

		$data = array (
			"name" => $this->input->post('name'),
			"lastName" => $this->input->post('lastName'),
			"twitter" => $this->input->post('twitter')
		);

		$this->usersModel->insertUser($data);
		
	}

	public function getUsers(){
		echo "<h3> Mis usuarios son </h3>";
		$users = $this->usersModel->getUsers();
		if ($users != FALSE) {
			foreach ($users->result() as $row){
				echo $row->name." ".$row->lastName." | ".$row->twitter."</br>";
			}
		}
	}
}
