<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class control extends CI_Controller{
	function __construct(){
		parent::__construct();
	}
	public function index(){
		$data['juduls'] = 'selamat datang';
			$username = $this->session->userdata('username');
			if($username==""){
				$this->load->view('login', $data);
			}else{
				echo " Silahkan Login";
			}
		
	}
	public function tampil(){
		$data['judulss'] == 'SELAMAT!!!';
		$username = $this->input->post('username');
		$password = $this->input->post('password');

		if($username == 'aanyas' && $password=='123'){
			$this->session->set_userdata(array('username'=>$username));
			$this->load->view('tampil', $data);
		}else{
			$this->load->view('login', $data);
		}
		$this->load->view('footer', $data);
	}
	public function logout(){
		$this->session->session_destroy();
	}
}
?>