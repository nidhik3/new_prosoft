<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Terms extends CI_Controller {

	public function index()
	{
		$this->load->helper('url');
        $this->load->view('header');
		$this->load->view('terms');
		$this->load->view('footer');
	}
}
