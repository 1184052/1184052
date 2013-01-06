<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Delete_employee extends CI_Controller {

public function __construct()
    {
            parent::__construct();
            $this->load->model('delete_model');
    }

	public function index()
	{
		$this->load->library('authlib');
		$loggedin = $this->authlib->is_loggedin();
 
		if ($loggedin === false) {
        $this->load->helper('url');
        redirect('/auth/login');
 		}
		else
		{
		$this->load->view('delete_view');
		}
	}
	
	public function dltemp() 
	{	
		$data = array( 
		'emp_no' => $this->input->post('emp_no')
		);
		$data1['data'] = $data;
		
		$this->delete_model->dltdata($data);
			
		$data1['msg'] = " successfully deleted";
		$this->load->view('delete_view', $data1);
		
		
	}
}

?>