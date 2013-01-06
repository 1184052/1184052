<?php 
class Chngmodel extends CI_Model {
    // model constructor function
    function __construct() {
        parent::__construct(); // call parent constructor
        $this->load->database();
    }
     
    public function chngdata($data) {
	
		extract($data);
		
        $this->db->where('emp_no', $id);
		$this->db->update($table_name, array('dept_no' => $dept, 'from_date' => $from, 'to_date' => $to));
		
        return true;
		
	}
	}
	
?>