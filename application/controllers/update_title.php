<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Update_title extends CI_Controller {

public function __construct()
    {
            parent::__construct();
            $this->load->model('updTmodel');
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
		$this->load->view('updTview');
		}
		
	}
	
	public function updtitle() 
	{	
		$data = array(
		'table_name' => 'titles',
		'id' => $this->input->post('id'),
		'title' => $this->input->post('title')
		);
							
		$this->updTmodel->upddata($data);         
        $info['succ'] = "Title Updated";
		$this->load->view('updTview', $info);
	}
		
}
?>