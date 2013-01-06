<?php 
class Delete_model extends CI_Model {
    // model constructor function
    function __construct() {
        parent::__construct(); // call parent constructor
        $this->load->database();
    }
     
    public function dltdata($data) {
		
		extract($data);
        $tables = array('dept_emp', 'dept_manager', 'employees', 'salaries', 'titles');
		$this->db->where('emp_no', $emp_no);
		$this->db->delete($tables);
		//$this->db->delete($table, array('emp_no' => $emp_no));
        	
		return;
    }
	}
	
?>