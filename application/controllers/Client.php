<?php
class client extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model('client_model','cm');
	}
	function index()
	{
	    $this->load->view('include/header');
	    $this->load->view('include/leftmenu');
		$this->load->view('client_view');
		$this->load->view('include/footer');
	}

	function client_data()
	{
		$data=$this->cm->client_list();
		echo json_encode($data);
	}

	function saveClient()
	{
		$data=$this->cm->save_client();
		echo json_encode($data);
	}

	function updateClient()
	{
		$data=$this->cm->update_client();
		echo json_encode($data);
	}

}
?>