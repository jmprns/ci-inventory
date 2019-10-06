<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

	public function index()
	{
		$this->load->view('templates/header');
		$this->load->view('categories/index');
		$this->load->view('templates/footer');

	}


}
