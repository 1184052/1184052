<?php 
class Add_model extends CI_Model {
    // model constructor function
    function __construct() {
        parent::__construct(); // call parent constructor
        $this->load->database();
    }
     
    public function adddata($data) {
				
		$inserted = 0;
		foreach($data as $k=>$v) $inserted+= (int) $this->db->insert($k, $data[$k]);
		if ($inserted === count($data)) return true;
		return false;
    }
	}
	
?>