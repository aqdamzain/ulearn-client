<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Discussions_Ask extends CI_Controller {

	public function index()
	{
		$this->load->view('discussions_ask');
	}
}