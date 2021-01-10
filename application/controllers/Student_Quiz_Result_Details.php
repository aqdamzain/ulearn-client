<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_Quiz_Result_Details extends CI_Controller {

	public function index()
	{
		$this->load->view('student_quiz_result_details');
	}
}