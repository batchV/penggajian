<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dasboard_manager extends CI_Controller {
	public function index()
	{
		$this->load->view('manager/dasboard_manager');
	}
}
