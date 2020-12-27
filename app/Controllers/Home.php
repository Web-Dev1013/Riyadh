<?php

namespace App\Controllers;
use App\Models\User_model;

class Home extends BaseController
{
	public function __construct()
	{
		$this->user_model = new User_model();
	}

	public function index()
	{
		$user = session()->get("email");
		if (!isset($user)) {
			return view('login');
		}
		else{
			return view("admin");
		}
	}

	public function init_Data(){
		$user_email = session()->get("email");
		$user_permission = session()->get("permission");
		$data = $this->user_model->init_Data($user_email, $user_permission);
		echo json_encode($data);
	}

	public function login(){
		$email = $_POST["email"];
		$password = $_POST["password"];
		$data = $this->user_model->login($email, $password);
		echo $data;
	}

	public function add_user(){
		$userName = $_POST["userName"];
		$email = $_POST["email"];
		$pass = $_POST["pass"];
		$phone = $_POST["phone"];
		$permission = $_POST["permission"];
		$data = $this->user_model->add_user($userName, $email, $pass, $phone, $permission);
		echo $data;
	}

	public function delete_user(){
		$id = $_POST['id'];
		$data = $this->user_model->delete_user($id);
		echo $data;
	}
	
	public function save_data(){
		$id = $_POST['id'];
		$username = $_POST['username'];
		$email = $_POST['email'];
		$pass = $_POST['pass'];
		$phone = $_POST['phone'];
		$permission = $_POST['permission'];
		$data = $this->user_model->save_data($id, $username, $email, $pass, $phone, $permission);
		echo $data;
	}

	public function logout(){
		session()->destroy();
	}
}
