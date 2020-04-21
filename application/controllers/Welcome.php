<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		// $this->template->display('template/content');
		$this->load->view('frontend/index');
	}
}
