<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Discussions extends CI_Controller {

	public function index()
	{
		$this->load->view('discussions');
	}
}