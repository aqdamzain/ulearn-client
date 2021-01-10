<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instructor_Courses extends CI_Controller {

	public function index()
	{
		$this->load->view('instructor_courses');
	}
}
