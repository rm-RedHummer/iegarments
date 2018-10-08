<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('Main_Controller.php');

class Sales_invoice extends Main_Controller {
	public function __construct()
    {
        parent::__construct();
				$this->load->model('Sales_invoice_model');
    }
	public function index()
	{
		$data['sales_invoice'] = $this->Sales_invoice_model->get_all_sales_invoice();
		$this->view('sales_invoice','scripts/sales_invoice.js',$data,null,'sales-invoice'); //name, script , data, css, uri
	}

	public function _remap($uri,$sec_uri){
		if($uri == "index") {
			$data['sales_invoice'] = $this->Sales_invoice_model->get_all_sales_invoice();
			$this->view('sales_invoice','scripts/sales_invoice.js',$data,null,'sales-invoice'); //name, script , data, css, uri
		} else if($uri != null && $sec_uri == null){
			$data['sales_invoice'] = $this->Sales_invoice_model->get_specific_sales_invoice($uri);
			$data['sales_invoice_products'] = $this->Sales_invoice_model->get_invoice_products($uri);
			$this->view('specific_sales_invoice','scripts/specific_sales_invoice.js',$data,null,'sales-invoice'); //name, script , data, css, uri
		} else {
			header("LOCATION: ".site_url('sales-invoice'));
		}

	}
}
