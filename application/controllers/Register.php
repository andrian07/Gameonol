<?php
defined('BASEPATH') OR exit('No direct script access allowed');
header('Access-Control-Allow-Origin: *');
header("Access-Control-Allow-Methods: GET, OPTIONS");

class Register extends CI_Controller {

	public function __construct(){
		parent::__construct();
		$this->load->helper('url');
		$this->load->library('session');
		$this->load->model('register_model');
		$this->load->helper(array('url', 'html'));
	}

	public function index()
	{

		
		if(isset($_SESSION['user_name']) != null){
			$this->load->view('Pages/register');
			//redirect('Dashboard/Admin', 'refresh');
		}else{
			$this->load->view('Pages/register');
		}
		//$this->load->view('Pages/Register/registerdaily');
	}

	public function forgetpass()
	{
		if(isset($_SESSION['user_name']) != null){
			$this->load->view('Pages/forgetpass');
			//redirect('Dashboard/Admin', 'refresh');
		}else{
			$this->load->view('Pages/forgetpass');
		}
	}

	public function successregister()
	{
		$id = $this->input->get('id');
		$get_transaction['get_transaction'] = $this->global_model->get_transaction($id)->result_array();
		$this->load->view('Pages/Register/succesregister', $get_transaction);
	}

	public function save_member()
	{

		$name 		  = $this->input->post('name');
		$phone 		  = $this->input->post('phone');
		$email 		  = $this->input->post('email');
		$gender 	  = $this->input->post('gender');
		$pass 		  = $this->input->post('pass');
		$cfpass 	  = $this->input->post('cfpass');
		$referal_code = $this->input->post('referal_code');
		$csrf_name    = $this->security->get_csrf_token_name();
		$csrf_hash    = $this->security->get_csrf_hash();

		$token_name = $this->security->get_csrf_token_name();

		if($pass != $cfpass){
			$response = [
				'code' => '200',
				'result' => 'Password Tidak Sama',
				'csrf_name' => $csrf_name,
				'csrf_hash' => $csrf_hash
			];
			echo json_encode(['code'=>0, 'result'=>$response]);die();
		}
		if($name == null){
			$response = [
				'code' => '200',
				'result' => 'Nama Harus Di Isi',
				'csrf_name' => $csrf_name,
				'csrf_hash' => $csrf_hash
			];
			echo json_encode(['code'=>0, 'result'=>$response]);die();
		}
		if($phone == null){
			$response = [
				'code' => '200',
				'result' => 'No HP Harus Di Isi',
				'csrf_name' => $csrf_name,
				'csrf_hash' => $csrf_hash
			];
			echo json_encode(['code'=>0, 'result'=>$response]);die();
		}
		if($email == null){
			$response = [
				'code' => '200',
				'result' => 'Email Harus Di Isi',
				'csrf_name' => $csrf_name,
				'csrf_hash' => $csrf_hash
			];
			echo json_encode(['code'=>0, 'result'=>$response]);die();
		}
		if($gender == null){
			$response = [
				'code' => '200',
				'result' => 'Jenis Kelamin Harus Di Isi',
				'csrf_name' => $csrf_name,
				'csrf_hash' => $csrf_hash
			];
			echo json_encode(['code'=>0, 'result'=>$response]);die();
		}
		if($pass == null){
			$response = [
				'code' => '200',
				'result' => 'Password Harus Di Isi',
				'csrf_name' => $csrf_name,
				'csrf_hash' => $csrf_hash
			];
			echo json_encode(['code'=>0, 'result'=>$response]);die();
		}

		$check_phone_number = $this->register_model->check_phone_number($phone)->result_array();
		if($check_phone_number != null){
			$response = [
				'code' => '200',
				'result' => 'No HP Sudah Terdaftar',
				'csrf_name' => $csrf_name,
				'csrf_hash' => $csrf_hash
			];
			echo json_encode(['code'=>0, 'result'=>$response]);die();
		}

		$check_email = $this->register_model->check_email($email)->result_array();
		if($check_phone_number != null){
			$response = [
				'code' => '200',
				'result' => 'Alamat Email Sudah Terdaftar',
				'csrf_name' => $csrf_name,
				'csrf_hash' => $csrf_hash
			];
			echo json_encode(['code'=>0, 'result'=>$response]);die();
		}

		$insert = array(
			'member_name'	       => $name,
			'member_phone'	       => $phone,
			'member_email'	       => $email,
			'member_gender'	       => $gender,
			'member_referal'	   => $referal_code,
			'member_pass'	       => md5($pass),
			'member_saldo'	       => 0
		);
		$this->register_model->save_member($insert);

		$response = [
			'code' => '200',
			'msg' => 'Succes Input',
			'csrf_name' => $csrf_name,
			'csrf_hash' => $csrf_hash
		];

		echo json_encode($response);
		die();
	}
}

?>