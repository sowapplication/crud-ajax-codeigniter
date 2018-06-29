<?php
class client_model extends CI_Model
{

	function client_list()
	{
		$hasil=$this->db->get('clientMaster');
		return $hasil->result();
	}

	function save_client()
	{
		$data = array(
		'clientName' 	    => $this->input->post('client_name'),
		'clientLegalName' 	=> $this->input->post('legal_name'),
		'isActive' 			=> $this->input->post('status'),
			);
		$result=$this->db->insert('clientMaster',$data);
		return $result;
	}

	function update_client()
	{
		$client_name = $this->input->post('client_name');
		$legal_name  = $this->input->post('legal_name');
		$status		 = $this->input->post('status');
		$id			 = $this->input->post('client_id');
		$this->db->set('clientName', $client_name);
		$this->db->set('clientLegalName', $legal_name);
		$this->db->set('isActive', $status);
		$this->db->where('clientId', $id);
		$result=$this->db->update('clientMaster');
		return $result;
	}
	
}