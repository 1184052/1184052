<?php 
class UpdSmodel extends CI_Model {
    // model constructor function
    function __construct() {
        parent::__construct(); // call parent constructor
        $this->load->database();
    }
     
    public function upddata($data) {
	
		/*extract($data);
		
        $this->db->where('emp_no', $id);
		$this->db->update($table_name, array('salary' => $result));*/
		$this->db->insert('salaries', $data);
        	
		return;
    }
	}
	
?>