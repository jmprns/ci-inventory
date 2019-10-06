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
		$data['name'] = $this->input->post('name');
		$this->category->store($data);

		$this->session->set_flashdata('success', 'Category has been added.');
		redirect(base_url().'categories');
	}

	public function edit($id)
	{
		$find = $this->category->find($id);

		if(!$find){
			show_404();
		}

		$html_data['html_title'] = 'Update Category';
		$html_data['page_title'] = 'Update Category';


		$data['category'] = $this->category->find($id);


		$this->load->view('templates/header', $html_data);
		$this->load->view('categories/edit', $data);
		$this->load->view('templates/footer');

	}

	public function update($id)
	{
		$find = $this->category->find($id);

		if(!$find){
			show_404();
		}

		$data['name'] = $this->input->post('name');
		$this->category->update($id, $data);

		$this->session->set_flashdata('success', 'Category has been updated.');
		redirect(base_url().'category');

	}

	public function destroy($id)
	{
		$find = $this->category->find($id);

		if(!$find){
			show_404();
		}


		$delete = $this->category->delete($id);

		if($delete !== true){

			$this->session->set_flashdata('error', 'Category is not deleted. Category not found.');
			redirect(base_url().'category');

		}

		$this->session->set_flashdata('success', 'Category has been deleted.');
		redirect(base_url().'category');




	}


}
