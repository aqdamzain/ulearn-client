<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Discussion extends CI_Controller {

	public function index()
	{
		$this->load->view('discussion');
	}
}