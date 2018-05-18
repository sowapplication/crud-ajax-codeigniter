<?php
class User_controller extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('User_model','um');
	}
	function index()
	{
	    $this->load->view('include/header');
	    $this->load->view('include/leftmenu');
		$this->load->view('User_view');
		$this->load->view('include/footer');
	}

	function User_data()
	{
		$data=$this->um->User_list();
		echo json_encode($data);
	}

	function save()
	{
		$data=$this->um->save_User();
		echo json_encode($data);
	}

	function update()
	{
		$data=$this->um->update_User();
		echo json_encode($data);
	}

	function deleteUser()
	{
		$data=$this->um->delete_User();
		echo json_encode($data);
	}

}