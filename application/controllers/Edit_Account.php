<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Edit_Account extends CI_Controller {

	public function index()
	{
		$this->load->view('edit_account');
	}
}