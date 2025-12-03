<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");

class Auth extends CI_Controller {

	public $csrf_name;
	public $csrf_hash;

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('auth_model');
		$this->load->model('global_model');
		$this->load->helper(array('url', 'html'));
		$this->csrf_name = $this->security->get_csrf_token_name();
		$this->csrf_hash = $this->security->get_csrf_hash();
	}

	public function index()
	{
		if(isset($_SESSION['user_name']) != null){
			//redirect('Dashboard/Admin', 'refresh');
			$this->load->view('Pages/login');
		}else{
			$this->load->view('Pages/login');
		}
	}

	public function register()
	{
		$this->load->view('Pages/register');
	}

	private function check_auth(){
		if(isset($_SESSION['user_name']) == null){
			redirect('Dashboard', 'refresh');
		}
	}



	public function login(){
		$username = $this->input->post('name');
		$password = md5($this->input->post('pass'));
		
		if($username == null){
			$response = [
				'code' => '200',
				'result' => 'Masukan No Telepon',
				'csrf_name' => $this->csrf_name,
				'csrf_hash' => $this->csrf_hash
			];
			echo json_encode(['code'=>0, 'result'=>$response]);die();
		}

		if($password == null){
			$response = [
				'code' => '200',
				'result' => 'Masukan Password',
				'csrf_name' => $this->csrf_name,
				'csrf_hash' => $this->csrf_hash
			];
			echo json_encode(['code'=>0, 'result'=>$response]);die();
		}


		$login = $this->auth_model->get_login_data($username, $password);
		if($login != null){
			$user_name 		= $login[0]->user_name;
			$user_id  		= $login[0]->user_id;
			$date 			= date("Y-m-d H:i:s");

			$newdata = [
				'user_name'  	=> $user_name,
				'user_id' 		=> $user_id,
				'logged_in' 	=> TRUE,
			];
			$this->session->set_userdata($newdata);

			$cookies_val = md5($user_name.$date);
			setcookie("token", "value", time() + (10 * 365 * 24 * 60 * 60), "/");

			$response = [
				'code' => '200',
				'msg' => 'Succes Input',
				'csrf_name' => $this->csrf_name,
				'csrf_hash' => $this->csrf_hash
			];
			echo json_encode($response);
			die();
		}else{
			$msg = 'Username Atau Password Salah';
			echo json_encode(['code'=>0, 'msg'=>$msg]);
		}	
	}

	public function logout(){
		$this->session->sess_destroy();
		redirect('Auth', 'refresh');
	}

	public function role_permission(){
		$user_role_id = $_SESSION['user_role_id'];
		$check_access = $this->global_model->check_access($user_role_id);
		echo json_encode(['code'=>200, 'result'=>$check_access]);
	}

}

?>