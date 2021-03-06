<?php
class sowmastercontroller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('sowmaster');
	}
	function index()
	{
	    $this->load->view('include/header');
	    $this->load->view('include/leftmenu');
		$this->load->view('sowview');
		$this->load->view('include/footer');
	}
	
	// SOW Master methods:-
	function sowData()
	{
		// echo '<pre>'; print_r($this->input->post()); echo '</pre>';
		$data=$this->sowmaster->sowList();
		echo json_encode($data);
	}
	
	function sowMoreData()
	{
		// echo '<pre>'; print_r($this->input->post()); echo '</pre>';
		// die;
		$this->load->view('include/header');
	    $this->load->view('include/leftmenu');
		$data	= $this->sowmaster->sowMoreList();
		echo json_encode($data);
		$this->load->view('sowMoreView');
		$this->load->view('include/footer');
	}

	function sowSave()
	{
		$data=$this->sowmaster->sowSave();
		echo json_encode($data);
	}

	function sowUpdate()
	{
		$data=$this->sowmaster->sowEdit();
		echo json_encode($data);
	}

	function sowDelete()
	{
		$data=$this->sowmaster->sowDelete();
		echo json_encode($data);
	}
	
	// Cycle Master methods:-
	function cycleView()
	{	
		$this->load->view('include/header');
	    $this->load->view('include/leftmenu');
		$this->load->view('cycleview');
		$this->load->view('include/footer');
	}
	function cycleData()
	{
		$data=$this->sowmaster->cycleList();
		echo json_encode($data);
	}

	function cycleSave()
	{
		$data=$this->sowmaster->cycleSave();
		echo json_encode($data);
	}

	function cycleUpdate()
	{
		$data=$this->sowmaster->cycleEdit();
		echo json_encode($data);
	}

	function cycleDelete()
	{
		$data=$this->sowmaster->cycleDelete();
		echo json_encode($data);
	}
}