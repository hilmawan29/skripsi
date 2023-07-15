<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Patient_model extends CI_Model {
	public function select_all() {
		$query = "SELECT `patient`.*, `employee`. `name`, `employee`. `department`  
				  FROM `patient` JOIN `employee`
				  ON `employee`.`id` = `patient`.`employee_id`  
				 ";
				 return $this->db->query($query)->result_array(); 
	}

	public function insert($data){
		return $this->db->insert('patient',$data);
	}

	public function get_by_id($id) {
		$query = "SELECT `patient`. `id`,`patient`. `check_in`, `patient`. `check_out`, `patient`. `keluhan`, `patient`. `diagnosis`, `patient`. `drugs`, `patient`. `conclusion`, `patient`. `employee_id`, `patient`. `conclusion_from_dokter`
				  FROM `patient` WHERE `id` = $id
				 ";
				 return $this->db->query($query)->row_array();
	} 
 
	public function select_all_by_date($start_date, $end_date) {
		$query = "SELECT `patient`.*, `employee`. `name`, `employee`. `department`  
				  FROM `patient` JOIN `employee`
				  ON `employee`.`id` = `patient`.`employee_id`
				  WHERE DATE(`patient`. `check_in`) >= DATE('$start_date') AND DATE(`patient`. `check_in`) <= DATE('$end_date')  
				 ";
				 return $this->db->query($query)->result_array(); 
	}

	public function select_all_by_ids($ids) {
		$query = "SELECT `patient`.*, `employee`. `name`, `employee`. `department`, `employee`. `age`, `employee`. `nik`  
				  FROM `patient` JOIN `employee`
				  ON `employee`.`id` = `patient`.`employee_id`
				  WHERE (`patient`. `id`) IN ($ids)  
				 ";
				 // die($query);
				 return $this->db->query($query)->result_array(); 
	}
 
	public function summary_result($start_date, $end_date) {
		$query = "SELECT COUNT(id) AS total, conclusion FROM `patient` WHERE DATE(`patient`. `check_in`) >= DATE('$start_date') AND DATE(`patient`. `check_in`) <= DATE('$end_date')  GROUP BY `conclusion`
				 ";
				 return $this->db->query($query)->result_array();
	}

	public function summary_reference_result($start_date, $end_date) {
		$query = "SELECT COUNT(id) AS total, conclusion, conclusion_from_dokter FROM `patient` WHERE DATE(`patient`. `check_in`) >= DATE('$start_date') AND DATE(`patient`. `check_in`) <= DATE('$end_date') AND `conclusion` = 'rujuk'  GROUP BY `conclusion_from_dokter`
				 ";
				 return $this->db->query($query)->result_array();
	}

	public function select_all_by_reference($start_date, $end_date) {
		$query = "SELECT `patient`.*, `employee`. `name`, `employee`. `department`  
				  FROM `patient` JOIN `employee`
				  ON `employee`.`id` = `patient`.`employee_id`
				  WHERE DATE(`patient`. `check_in`) >= DATE('$start_date') AND DATE(`patient`. `check_in`) <= DATE('$end_date') AND `patient`.`conclusion` = 'rujuk'
				 ";
				 return $this->db->query($query)->result_array();
	}
}