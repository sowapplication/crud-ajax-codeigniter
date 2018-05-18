<?php
class User_model extends CI_Model
{

	function user_list(){
		$hasil=$this->db->get('users');
		return $hasil->result();
	}

	function save_User(){
		$data = array(
				'name' 	=> $this->input->post('name'),
				'email' => $this->input->post('email'),
				'role'  => $this->input->post('role'),
				'status'=> $this->input->post('status'),
			);
		$result=$this->db->insert('users',$data);
		return $result;
	}

	function update_User(){
		
		$id=$this->input->post('id');
		$name=$this->input->post('name');
		$email=$this->input->post('email');
		$role=$this->input->post('role');
		$status=$this->input->post('status');

		$this->db->set('name', $name);
		$this->db->set('email', $email);
		$this->db->set('role', $role);
		$this->db->set('status', $status);
		$this->db->where('id', $id);
		$result=$this->db->update('users');
		return $result;
	}

	function delete_User()
	{
		$id = $this->input->post('id');
		
		$this->db->where('id', $id);
		
		$result=$this->db->delete('users');
		return $result;
	}
	
}