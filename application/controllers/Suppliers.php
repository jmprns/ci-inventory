<?php 
        
defined('BASEPATH') OR exit('No direct script access allowed');
        
class Suppliers extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('supplier');
	}

	public function index()
	{
		$html_data['html_title'] = 'Category Lists';
		$html_data['page_title'] = 'Category Lists';


		$data['suppliers'] = $this->supplier->get();


		$this->load->view('templates/header', $html_data);
		$this->load->view('suppliers/index', $data);
		$this->load->view('templates/footer');
	}

	public function store()
	{
		$data['name'] = $this->input->post('name');
		$data['address'] = $this->input->post('address');
		$this->supplier->store($data);

		$this->session->set_flashdata('success', 'Supplier has been added.');
		redirect(base_url().'supplier');
	}

	public function edit($id)
	{
		$find = $this->supplier->find($id);

		if(!$find){
			show_404();
		}

		$html_data['html_title'] = 'Update Supplier';
		$html_data['page_title'] = 'Update Supplier';


		$data['supplier'] = $this->supplier->find($id);


		$this->load->view('templates/header', $html_data);
		$this->load->view('suppliers/edit', $data);
		$this->load->view('templates/footer');

	}

	public function update($id)
	{
		$find = $this->supplier->find($id);

		if(!$find){
			show_404();
		}

		$data['name'] = $this->input->post('name');
		$data['address'] = $this->input->post('address');
		$this->supplier->update($id, $data);

		$this->session->set_flashdata('success', 'Supplier has been updated.');
		redirect(base_url().'supplier');

	}

	public function destroy($id)
	{
		$find = $this->supplier->find($id);

		if(!$find){
			show_404();
		}

		$delete = $this->supplier->delete($id);

		if($delete !== true){

			$this->session->set_flashdata('error', 'Supplier is not deleted. Supplier not found.');
			redirect(base_url().'supplier');

		}

		$this->session->set_flashdata('success', 'Supplier has been deleted.');
		redirect(base_url().'supplier');

	}
        
}
        
    /* End of file  Suppliers.php */
        
                            