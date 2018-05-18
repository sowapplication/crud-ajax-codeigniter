<?php
class roleModel extends CI_Model
{

	function roleList()
	{
		return $this->db->get('rolemaster')->result();
	}

	function saveRole()
	{
		$data = array(
				'role'  => $this->input->post('role'),
				'usercreate'  => $this->input->post('usercreate'),
				'userupdate'  => $this->input->post('userupdate'),
				'userdelete'  => $this->input->post('userdelete'),
				'userview'  => $this->input->post('userview'),
				// 'clientcreate'  => $this->input->post('clientcreate'),
				// 'clientupdate'  => $this->input->post('clientupdate'),
				// 'clientdelete'  => $this->input->post('clientdelete'),
				// 'clientview'  => $this->input->post('clientview'),
				// 'sowcreate'  => $this->input->post('sowcreate'),
				// 'sowupdate'  => $this->input->post('sowupdate'),
				// 'sowdelete'  => $this->input->post('sowdelete'),
				// 'sowview'  => $this->input->post('sowview'),
				// 'rolecreate'  => $this->input->post('rolecreate'),
				// 'roleupdate'  => $this->input->post('roleupdate'),
				// 'roledelete'  => $this->input->post('roledelete'),
				// 'roleview'  => $this->input->post('roleview'),
			);
		$result=$this->db->insert('rolemaster',$data);
		return $result;
	}

	function updateRole()
	{
		$id = $this->input->post('id');
		$role=$this->input->post('role');
		$usercreate=$this->input->post('usercreate');
		$userupdate=$this->input->post('userupdate');
		$userdelete=$this->input->post('userdelete');
		$userview=$this->input->post('userview');
		
		$this->db->set('usercreate', $usercreate);
		$this->db->set('userupdate', $userupdate);
		$this->db->set('userdelete', $userdelete);
		$this->db->set('userview', $userview);
		$this->db->set('role', $role);
		$this->db->where('id', $id);
		$result=$this->db->update('rolemaster');
		
		return $result;
	}
	function deleteRole()
	{
		$id=$this->input->post('id');
		$this->db->where('id', $id);
		$result=$this->db->delete('rolemaster');
		return $result;
	}
	
}