<?php 

defined('BASEPATH') OR exit('No direct script access allowed');
                        
class Supplier extends CI_Model {
                        
	public function __construct()
	{
		$this->load->database();
	}

	public function get()
	{
		$query = $this->db->get('suppliers');
		return $query->result_array();
	}

	public function find($id)
	{
		$query = $this->db->get_where('suppliers', array('id' => $id));
		return $query->row_array();
	}

	public function store($data)
	{
		return $this->db->insert('suppliers', $data);
	}

	public function update($id, $data)
	{
		$this->db->where('id', $id);
		$this->db->update('suppliers', $data);
		return true;

	}

	public function delete($id)
	{
		$this->db->where('id', $id);
		$this->db->delete('suppliers');
		return true;
	}
                            
                        
}
                        
/* End of file Supplier.php */
    
                        