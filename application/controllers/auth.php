<?php
class Auth extends CI_Controller {
 
    function __construct()
    {
        parent::__construct();
        $this->load->library('authlib');
        $this->load->helper('url');
    }
	
	public function index()
	{
    redirect('/auth/login'); // url helper function
	}
 
	public function register()
	{
    $this->load->view('register_view',array('errmsg' => ''));
	}
 
	public function createaccount()
	{
    $name = $this->input->post('name');
    $username = $this->input->post('uname');
    $password = $this->input->post('pword');
    $conf_password = $this->input->post('conf_pword');
 
    if (!($errmsg = $this->authlib->register($name,$username,$password,$conf_password))) {
        redirect('/auth/login');
    }
    else {
        $data['errmsg'] = $errmsg;
        $this->load->view('register_view',$data);
    }
 
	}
	public function login()
	{
    $data['errmsg'] = '';
    $this->load->view('login_view',$data);
	}
 
	function logout() {
	$this->session->unset_userdata('name');
	$this->session->unset_userdata('session_id');
	$this->session->sess_destroy();
	redirect('home/index'); 
	}
	
	public function authenticate()
	{
    $username = $this->input->post('uname');
    $password = $this->input->post('pword');
    $user = $this->authlib->login($username,$password);
	$this->admin($username,$password);
    if ($user !== false) {
        $this->load->view('homeview',array('name' => $user['name']));
		//redirect('home');
		
    }
    else {
        $data['errmsg'] = 'Unable to login - please try again';
        $this->load->view('login_view',$data);
    }	
	}
	
	public function admin($username,$password){
	//$this->load-model('usermodel');
	$admin = $this->authlib->adminlib($username,$password);
	if ($admin == false){
	return false;
	//if ($res->num_rows() != 1){
	//return false;
	}
	}
	
	public function add_employee() {
	$this->load->view('add_view');
	}
	public function delete_employee() {
	$this->load->view('delete_view');
	}
	public function update_title() {
	$this->load->view('updTview');
	}
	public function update_salary() {
	$this->load->view('updSview');
	}
	public function change_department() {
	$this->load->view('chngview');
	}
}
?>