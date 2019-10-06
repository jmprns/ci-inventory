<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Categories extends CI_Controller {

	public function __construct()
	{
		parent::__construct();

		$this->load->model('category');
	}

	public function index()
	{
		$html_data['html_title'] = 'Category Lists';
		$html_data['page_title'] = 'Category Lists';


		$data['categories'] = $this->category->get();


		$this->load->view('templates/header', $html_data);
		$this->load->view('categories/index', $data);
		$this->load->view('templates/footer');


	}

	public function store()
	{
		$data['name'] = $_POST['name'];
		$this->category->store($data);

		$this->session->set_flashdata('success', 'Category has been added');
		redirect(base_url().'categories');
	}


}
