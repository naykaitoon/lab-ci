<?php
class homes extends CI_Controller
{
	function __construct()
	{
		parent::__construct();
		$this->load->model("Pro3");
	}
	function index(){
		$data["data"] = $this->showAllData();
		$data["maxSalary"] = $this->Pro3->maxs("salary","max");
		$data["maxSaleAmount"] = $this->Pro3->maxs("SaleAmount","max");
		$data["minSalary"] = $this->Pro3->mins("salary","min");
		$data["minSaleAmount"] = $this->Pro3->mins("SaleAmount","min");
		$data["avgSalary"] = $this->Pro3->avg("salary","avg");
		$data["avgSaleAmount"] = $this->Pro3->avg("SaleAmount","avg");

		
		$this->load->view('homes',$data);
		
	}
	
	function showAllData(){
		$data = $this->Pro3->getData();
		return $data;
	}
	

}
?>