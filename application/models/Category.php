<?php 
defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Category extends CI_Model {

	public function __construct()
	{
		$this->load->database();
	}

	public function get()
	{
		$query = $this->db->get('categories');
		return $query->result_array();
	}

	public function find($id)
	{
		$query = $this->db->get_where('categories', array('id' => $id));
		return $query->row_array();
	}

	public function store($data)
	{
		return $this->db->insert('categories', $data);
	}

	public function update($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('categories', $data);
		return true;

	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('categories');
		return true;
	}
                        
                   
}
                        
/* End of file Category.php */
    
                        