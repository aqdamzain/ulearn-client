<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Instructor_Edit_Quiz extends CI_Controller {

	public function index()
	{
		$this->load->view('instructor_edit_quiz');
	}
}