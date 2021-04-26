<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class dasboard extends CI_Controller {
	public function index()
	{
		$data['content'] = 'admin/dasboard';
		$this->load->view('_templates/wrapper',$data);
	}
}
