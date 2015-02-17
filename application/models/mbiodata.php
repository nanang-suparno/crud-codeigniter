<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mbiodata extends CI_Model {

	function do_insert()
	{
		$firstname = $this->input->post('firstname');
		$lastname  = $this->input->post('lastname');
		$hobby     = $this->input->post('hobby');
		$phone     = $this->input->post('phone');
		$address   = $this->input->post('address');

		$data = array(
						'firstname'=> $firstname,
						'lastname'=> $lastname,
						'hobby'=> $hobby,
						'phone'=> $phone,
						'address'=> $address
					  );
		$this->db->insert('table_biodata',$data);
	}
	
	public function get()
	{
		$query = $this->db->select('*')->from('table_biodata')->get();

		return $query;
	}

	public function get_edit($id)
	{
		$query = $this->db->select('*')->from('table_biodata')->where('id',$id)->get();

		return $query;
	}

	function do_update()
	{
		$id 	   = $this->input->post('id');
		$firstname = $this->input->post('firstname');
		$lastname  = $this->input->post('lastname');
		$hobby     = $this->input->post('hobby');
		$phone     = $this->input->post('phone');
		$address   = $this->input->post('address');

		$data = array(
						'firstname'=> $firstname,
						'lastname'=> $lastname,
						'hobby'=> $hobby,
						'phone'=> $phone,
						'address'=> $address
					  );
		$where = array('id' => $id);
		$this->db->update('table_biodata',$data,$where);
	}

	function do_delete($id)
	{
		$where = array('id' => $id);
		$query = $this->db->delete('table_biodata',$where);
		
		return $query;
	}
}
