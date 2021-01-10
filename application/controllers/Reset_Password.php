<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Reset_Password extends CI_Controller {

	public function index()
	{
		$this->load->view('reset_password');
	}
}