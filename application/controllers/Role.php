<?php
class Role extends CI_Controller
{
    function __construct()
    {
        parent::__construct();
        $this->load->model('roleModel','rm');
    }
    function index()
    {
        $this->load->view('include/header');
        $this->load->view('include/leftmenu');
        $this->load->view('roleView');
        $this->load->view('include/footer');
    }
    
    function roleData()
    {
        $data=$this->rm->roleList();
        echo json_encode($data);
    }
    
    function save()
    {
        $data=$this->rm->saveRole();
        echo json_encode($data);
    }
    
    function update()
    {
        $data=$this->rm->updateRole();
        echo json_encode($data);
    }
    
    function deleteRole()
    {
        $data=$this->rm->deleteRole();
        echo json_encode($data);
    }
    
}