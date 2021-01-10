<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Student_Take_Quiz extends CI_Controller {

	public function index()
	{
		$this->load->view('student_take_quiz');
	}
}