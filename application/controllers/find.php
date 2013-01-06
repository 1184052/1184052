<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Find extends CI_Controller {
public function __construct()
    {
            parent::__construct();
            $this->load->model('fndmodel');
    }

	public function index()
	{
		$this->load->view('searchview');//,array('name' => $loggedin));
	}
		
	
	public function findemp() 
	{	
		$name = $this->input->get('lastname');
				
		if($data['user'] = $this->fndmodel->finduser($name)) {
		
			$this->load->view('searchview', $data);
		}
	
	}
}
?>