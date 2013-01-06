<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Update_salary extends CI_Controller {

public function __construct()
    {
            parent::__construct();
            $this->load->model('updSmodel');
			//$this->load->helper('form');
    }

	public function index()
	{
		
		$this->load->library('authlib');
		$loggedin = $this->authlib->is_loggedin();
		//$admin = $this->auth->admin();
 
		if ($loggedin === false || $this->auth->admin() == false) {
        $this->load->helper('url');
        redirect('/auth/login');
 	    }
        /*else if ($admin === false) {
		$message ['msg'] = "You are not an admin!";
		$this->load->view('homeview', $message);
		}*/
		else
		{
		$this->load->view('updSview');
		}
		
		
	}
	
	public function updslry() 
	{	
		$data = array(
		//'table_name' => 'salaries',
		'emp_no' => $this->input->post('id'),
		'salary' => $this->input->post('salary'),
		'from_date' => $this->input->post('from_date'),
		'to_date' => $this->input->post('to_date')
		);
		$data1['data'] = $data;
							
		$this->updSmodel->upddata($data);         
        $info['succ'] = "Salary Updated";
		$this->load->view('updSview', $info);
	}
		
}
?>