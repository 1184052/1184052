<?php
class Authlib {
 
    function __construct()
    {
        // get a reference to the CI super-object, so we can
        // access models etc. (because we don't extend a core
        // CI class)
        $this->ci = &get_instance();
 
        $this->ci->load->model('usermodel');
 
    }
 
    public function register($name,$user,$pwd,$conf_pwd)
    {
        if ($name == '' || $user == '' || $pwd == '' || $conf_pwd == '') {
            return 'Missing field';
        }
        if ($pwd != $conf_pwd) {
            return "Passwords do not match";
        }
        return $this->ci->usermodel->register($name,$user,$pwd);
    }
	
	public function login($user,$pwd)
	{
    if ($user == '' || $pwd == '') {
        return false;
    }
    return $this->ci->usermodel->login($user,$pwd);
	}
	
	public function is_loggedin()
	{
    return $this->ci->usermodel->is_loggedin();
	}
	
	public function adminlib($user,$pwd) 
	{
	return $this->ci->usermodel->chkadmn($user,$pwd);
	}
}
?>