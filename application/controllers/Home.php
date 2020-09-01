<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

	function __construct()
	{
		parent::__construct();
	}
	public function index()
	{
		$this->load->view('v_home');
	}
	public function bangunan_json()
	{
		$data = $this->db->get('bangunan')->result();
		echo json_encode($data);
	}
}
