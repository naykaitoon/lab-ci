<?php
class ProductMaterial extends CI_Model{

		function __construct()
		{
			$this->load->database();
			parent::__construct();
		}
		function getProductMaterial()
		{
		 $data  = 	$this->db->get('productmaterial')->result_array();
		 return $data;
		}
	}
?>