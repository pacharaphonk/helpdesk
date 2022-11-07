<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('data_model');
	}

	public function index()
	{
		$this->load->view('home/header');
		$this->load->view('home/view_home');
		$this->load->view('home/footer');
	}

}