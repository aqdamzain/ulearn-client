<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_My_Courses extends CI_Controller {

	public function index()
	{
		$this->load->view('student_my_courses');
	}
}