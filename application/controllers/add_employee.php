<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Add_employee extends CI_Controller {

public function __construct()
    {
            parent::__construct();
            $this->load->model('add_model');
			//$this->load->model('usermodel');
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
		$this->load->view('add_view');
		}
	}
	
		
	
	public function addemp() 
	{	
		$data1 = array( 
		'emp_no' => $this->input->post('emp_no'),
		'birth_date' => $this->input->post('birth_date'),
		'first_name' => $this->input->post('first_name'),
		'last_name' => $this->input->post('last_name'),
		'gender' => $this->input->post('gender'),
		'hire_date' => $this->input->post('hire_date'),
		);
		
		
		$data2 = array(
		'emp_no' => $this->input->post('emp_no'),
		'title' => $this->input->post('title')
		);
		
		
		$data3 = array(
		'emp_no' => $this->input->post('emp_no'),
		'dept_no' => $this->input->post('dept')
		);
		
		$data4 = array( 'emp_no' => $this->input->post('emp_no'));
				
		$mdata ['employees'] = $data1;
		$mdata ['titles'] = $data2;
		$mdata ['dept_emp'] = $data3;
		$mdata ['salaries'] = $data4;
		
		
		if ($this->add_model->adddata($mdata))
		{
		$message ['msg'] = "Data successfully added";
		$this->load->view('add_view', $message);
		}
	}
}

?>