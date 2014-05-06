<?php
class Material extends CI_Model{

		function __construct()
		{
			$this->load->database();
			parent::__construct();
		}
		function getMaterial()
		{
		 $data  = 	$this->db->get('material')->result_array();
		 return $data;
		}
	}
?>