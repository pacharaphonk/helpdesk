<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Report extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//chk admin status
		if($this->session->userdata('admin_status') !=1){
				redirect('login/logout','refresh');
		}
		$this->load->model('data_model');
	}

	public function index()
	{
		$data['queryreport']=$this->data_model->countbycasetype();
		$data['querystatus']=$this->data_model->countbycasestatus();
		$data['queryloc']=$this->data_model->countbycaseloc();
		
		/* echo '<pre>';
		print_r($data);
		echo '</pre>';
		exit(); */
		$this->load->view('template/header');
		$this->load->view('backend/report_view',$data);
		$this->load->view('template/footer');
	}
	
	public function bydate()
	{
		$data['query']=$this->data_model->count_case_date();
		$data['query1']=$this->data_model->count_case_m();
		$data['query2']=$this->data_model->count_case_y();
		/* echo '<pre>';
		print_r($data);
		echo '</pre>';
		exit(); */
		$this->load->view('template/header');
		$this->load->view('backend/report_view_date',$data);
		$this->load->view('template/footer');
	}
	
	public function getform()
	{
		$data['query']=$this->data_model->count_case_form();
		/* echo '<pre>';
		print_r($data);
		echo '</pre>';
		exit(); */
		$this->load->view('template/header');
		$this->load->view('backend/jobs_list_datetime',$data);
		$this->load->view('template/footer');
	}

}