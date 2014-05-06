<?php
class home extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
	}
	function index(){	
		$this->load->view("home");
	}
	function loadPage($page){
		
		if($page=="home"){
			$this->load->view("home");
		}else if($page=="product"){
			$this->productList();
		}else if($page=="material"){
			$this->materialList();
		}else if($page=="magProduct"){
			$this->magProduct();
		}
	}
	
	function productList(){	
		$data['product'] = $this->Product->getProduct();
		$this->load->view("table/productList",$data);
	}
	function materialList(){	
		$data['material'] = $this->Material->getMaterial();
		$this->load->view("table/materialList",$data);
	}
	
	function deleteProduct($productId){	
		$this->Product->setProductId($productId);
		$data['result'] = $this->Product->deleteProduct();
		$this->load->view("table/result",$data);
	}
	
	function magProduct(){	
		$data['product'] = $this->Product->getProduct();
		$this->load->view("table/magProductList",$data);
	}
	
	function formAddProduct(){	
			$data['result'] = $this->Material->getMaterial();
			$this->load->view("table/formAddProduct",$data);
	}
	
	function editProduct($productId){	
	
			$data['material'] = $this->Material->getMaterial();
			$data['result'] = $this->Product->getProductPk($productId);
			$this->load->view("table/formEditProduct",$data);
	}
	function editProductAction(){	
			
			$data['result'] = $this->Material->getMaterial();
			$this->load->view("table/formEditProduct",$data);
	}
	
	function addProductAction(){	

		$productName = $this->input->post("productName");
		$productValue = $this->input->post("productValue");
  	  	$productmaterialid =$this->input->post('productmaterialid');
		$matValue = $this->input->post('matValue');
		
		$this->Product->setProductName($productName);
		$this->Product->setProductValue($productValue);

		$data['result'] = $this->Product->addProduct($productmaterialid,$matValue);
		$this->load->view("table/result",$data);
	}
}
?>