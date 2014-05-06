<?php
class Product extends CI_Model{

		function __construct()
		{
			$this->load->database();
			parent::__construct();
		}
		
		var $productId;
		var $productName;
		var $productMaterialId;
		var $productValue;
		
			###### SET : productId () ######
		function setProductId($productId)
		{
		$this->productId = $productId;
		}

		###### GET : productId () ######
		function getProductId()
		{
			return $this->productId;
		}
		###### SET : productName () ######
		function setProductName($productName)
		{
			$this->productName = $productName;
		}

		###### GET : productName () ######
		function getProductName()
		{
			return $this->productName;
		}
		###### SET : productMaterialId () ######
		function setProductMaterialId($productMaterialId)
		{
			$this->productMaterialId = $productMaterialId;
		}

		###### GET : productMaterialId () ######
		function getProductMaterialId()
		{
			return $this->productMaterialId;
		}
		###### SET : productValue () ######
		function setProductValue($productValue)
		{
			$this->productValue = $productValue;
		}

		###### GET : productValue () ######
		function getProductValue()
		{
		return $this->productValue;
		}

		
		function getProduct()
		{
		 $data  = 	$this->db->get('product')->result_array();
		 return $data;
		 
		}
		function getProductPk($productId)
		{
		 $data  = 	$this->db->get_where('product', array('productId' => $productId))->result_array();
		 return $data;
		 
		}
		function deleteProduct(){
			try{
			$tables = array('product', 'productmaterial');
			$this->db->where('productId', $this->getProductId());
			$this->db->delete($tables); 
				return "สำเร็จ";
			} catch (Exception $e){
				return "ล้มเหลว".$e;
			}
		}
		function addProduct($productMaterialId,$productMaterialValue){
			try{
				$data = array(
			    'productName' => $this->getProductName() ,
			    'productValue' => $this->getProductValue()
				 );
				$this->db->insert('product', $data);
				$insertId = $this->db->insert_id();
				
			for($i=0;$i<count($productMaterialId);$i++){
				$datass = array(
				 array(
				 	'productId' => $insertId ,
   				    'materialId' => $productMaterialId[$i] ,
					'productMaterialValue' => $productMaterialValue[$i] ,
					
					)
				);	

			$this->db->insert_batch('productmaterial',$datass); 
				}
			return "สำเร็จ";
			} catch (Exception $e){
				return "ล้มเหลว".$e;
			}
		
		}
	}
?>