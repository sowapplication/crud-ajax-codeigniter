<?php
class sowmaster extends CI_Model
{
	// SOW Master methods:-
	function sowList()
	{	
		$hasil = $this->db->get('sowmaster');
		return $hasil->result();
	}
	function sowIdList()
	{		
		$id                  = $this->input->post('id');
		$this->db->where('clientId', $id);
		$hasil = $this->db->get('sowmaster');
		return $hasil->result();
	}
	function sowSave()
	{
		$data = array(
				'sowNumber' 	        => $this->input->post('sowNumber'),
				'sowName'    	        => $this->input->post('sowName'),
				'projectType'           => $this->input->post('projectType'),
				'expectedTotalVolume' 	=> $this->input->post('expectedTotalVolume'),
				'assignedTo' 	        => $this->input->post('assignedTo'),
				'sowLink'               => $this->input->post('sowLink'),
				'sowStatus'             => $this->input->post('sowStatus'),
				'inputFrom'             => $this->input->post('inputFrom'),
				'clientName'            => $this->input->post('clientName'),
				'producttype'           => $this->input->post('producttype'),
				'startDate'             => $this->input->post('startDate'),
				'endDate'               => $this->input->post('endDate'),
				'clientName'            => $this->input->post('clientName')
			);
			
		$result=$this->db->insert('sowmaster',$data);
		return $result;
	}
	function sowEdit()
	{
		$sowNumber           = $this->input->post('sowNumber');
		$sowName             = $this->input->post('sowName');
		$projectType         = $this->input->post('projectType');
		$expectedTotalVolume = $this->input->post('expectedTotalVolume');
		$assignedTo          = $this->input->post('assignedTo');
		$sowLink             = $this->input->post('sowLink');
		$sowStatus           = $this->input->post('sowStatus');
		$inputFrom           = $this->input->post('inputFrom');
		$clientName          = $this->input->post('clientName');
		$producttype         = $this->input->post('producttype');
		$endDate           	 = $this->input->post('endDate');
		$startDate           = $this->input->post('startDate');
		$id                  = $this->input->post('id');
	
		$this->db->set('sowNumber', $sowNumber);
		$this->db->set('sowName', $sowName);
		$this->db->set('projectType', $projectType);
		$this->db->set('expectedTotalVolume', $expectedTotalVolume);
		$this->db->set('assignedTo', $assignedTo);
		$this->db->set('sowLink', $sowLink);
		$this->db->set('sowStatus', $sowStatus);
		$this->db->set('inputFrom', $inputFrom);
	    $this->db->set('clientName', $clientName);
		$this->db->set('endDate', $endDate);
	    $this->db->set('producttype', $producttype);
		$this->db->set('startDate', $startDate);
		$this->db->where('id', $id);
		$result=$this->db->update('sowmaster');
		return $result;
	}
	function sowDelete()
	{
		$id=$this->input->post('id');
		$this->db->where('id', $id);
		$result=$this->db->delete('sowmaster');
		return $result;
	}
	
	// Cycle Master methods:-
	function cycleList()
	{
		$hasil = $this->db->get('cyclemaster');
		return $hasil->result();
	}
	function cycleSave()
	{
		$data = array(
				'cycleflag' 	        	=> $this->input->post('cycleflag'),
				'volume'    	        	=> $this->input->post('volume'),
				'startdate'           		=> $this->input->post('startdate'),
				'duedate' 					=> $this->input->post('duedate'),
				'completeddate' 	        => $this->input->post('completeddate'),
			);
			
		$result=$this->db->insert('cyclemaster',$data);
		return $result;
	}
	function cycleEdit()
	{
		$cycleflag           	= $this->input->post('cycleflag');
		$volume             	= $this->input->post('volume');
		$startdate         		= $this->input->post('startdate');
		$duedate 				= $this->input->post('duedate');
		$id                  	= $this->input->post('id');
		
		print "volume.... " . $volume . "<br>";
		print "id.... " . $id . "<br>";
	
		$this->db->set('cycleflag', $cycleflag);
		$this->db->set('volume', $volume);
		$this->db->set('startdate', $startdate);
		$this->db->set('duedate', $duedate);
		$this->db->where('id', $id);
		$result=$this->db->update('cyclemaster');
		return $result;
	}
	function cycleDelete()
	{
		$id=$this->input->post('id');
		$this->db->where('id', $id);
		$result=$this->db->delete('cyclemaster');
		return $result;
	}
}