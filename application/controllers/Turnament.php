<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");

class Turnament extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('register_model');
		$this->load->model('global_model');
		$this->load->model('dashboard_model');
		$this->load->helper(array('url', 'html'));
	}

	private function check_auth()
	{
		if(isset($_SESSION['user_name']) == null){
			return 0;
		}else{
			return 1;
		}
	}

	private function check_cookies()
	{
		$user_id = $_SESSION['user_id'];
		$check_cookies = $this->global_model->check_cookies($user_id)->result_array();
		if($check_cookies == null){
			return 0;
		}else{
			$cookies_name = $_COOKIE['cookies_name'];
			if($check_cookies[0]['member_cookies'] != $cookies_name){
				return 0;
			}else{
				return 1;
			}
		}
	}

	public function index()
	{
		$check_auth = $this->check_auth();
		if($check_auth == 0){
			redirect('Auth', 'refresh');
		}else{
			$check_cokies = $this->check_cookies();
			if($check_cokies == 0){
				redirect('Auth', 'refresh');
			}else{
				$user_id  = $_SESSION['user_id'];
				$member_data['member_data'] = $this->dashboard_model->get_member_data($user_id)->result_array();
				$turnament_info['turnament_info'] = $this->dashboard_model->get_turnament_info()->result_array();
				$data['data']  = array_merge($member_data, $turnament_info);
				$this->load->view('Pages/turnament', $data);
			}
		}
	}

}

?>