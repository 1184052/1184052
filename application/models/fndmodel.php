<?php 
class Fndmodel extends CI_Model {
    // model constructor function
    function __construct() {
        parent::__construct(); // call parent constructor
        $this->load->database();
    }
     
    public function finduser($name) {
	
		if ($name == null || $name == '') {
                return false;
        }
      
		$this->db->select('e.emp_no, e.first_name, e.last_name, t.title, d.dept_no');
		$this->db->from('employees AS e, titles AS t, dept_emp AS d');
		$this->db->where('e.last_name', $name);
		$this->db->where('e.emp_no = t.emp_no');
		$this->db->where('e.emp_no = d.emp_no');
		
		$result = $this->db->get();
		
		$data = array();
		foreach ($result->result() as $row ){
		$entry = array();
		$entry['emp_no'] = $row->emp_no;		
		$entry['first_name'] = $row->first_name;
		$entry['last_name'] = $row->last_name;		
		$entry['title'] = $row->title;
		$entry['dept_no'] = $row->dept_no;
		$data[] = $entry;
		}
		return $data;
		    
	
	}
	}
?>