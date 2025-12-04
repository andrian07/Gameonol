<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");

class Dashboard extends CI_Controller {

	public $csrf_name;
	public $csrf_hash;

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('global_model');
		$this->load->helper(array('url', 'html'));
		$this->csrf_name = $this->security->get_csrf_token_name();
		$this->csrf_hash = $this->security->get_csrf_hash();
	}

	private function check_auth()
	{
		if(isset($_SESSION['user_name'] ) == null){
			redirect('Auth', 'refresh');
		}
	}

	private function check_cookies()
	{
		$user_id = $_SESSION['user_id'];
		$check_cookies = $this->global_model->check_cookies($user_id)->result_array();
		$cookies_name = $_COOKIE['cookies_name'];
		if($check_cookies[0]['member_cookies'] != $cookies_name){
			return 0;
		}else{
			return 1;
		}
	}

	public function index()
	{
		$this->check_auth();
		$check_cokies = $this->check_cookies();
		if($check_cokies == 0){
			redirect('Auth', 'refresh');
		}else{
			$this->load->view('Pages/dashboard');
		}
	}

	






}

?>