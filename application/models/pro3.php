<?php
class Pro3 extends CI_Model{

		function __construct()
		{
			$this->load->database();
			parent::__construct();
		}
		
		function getData()
		{
		 $data  = 	$this->db->get('psp2')->result_array();
		 return $data;

		}
		function maxs($field,$as){

 		$this->db->select_max($field,$as);
 		$query = $this->db->get("psp2")->result_array();

		return $query;
		}
		
		function mins($field,$as){

 		$this->db->select_min($field,$as);
 		$query = $this->db->get("psp2")->result_array();

		return $query;
		}
		
		function avg($field,$as){

 			$this->db->select_avg($field,$as);
 			$query = $this->db->get("psp2")->result_array();

		return $query;
		}
		
	}
?>