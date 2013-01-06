<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Change_department extends CI_Controller {

public function __construct()
    {
            parent::__construct();
            $this->load->model('chngmodel');
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
		$this->load->view('chngview');
		}
		
	}
	
	public function change() 
	{	
		$data = array(		
		'table_name' => 'dept_emp',
		'id' => $this->input->post('id'),
		'dept' => $this->input->post('dept'),
		'from' => $this->input->post('from'),
		'to' => $this->input->post('to')
		);
		$data1['data'] = $data;
							
		if($this->chngmodel->chngdata($data))
		{
        $info['succ'] = "Department changed";
		$this->load->view('chngview', $info);
		}
		
	}
		
}
?>