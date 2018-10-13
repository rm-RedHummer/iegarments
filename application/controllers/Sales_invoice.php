<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('Main_Controller.php');

class Sales_invoice extends Main_Controller {
	public function __construct()
    {
        parent::__construct();
				$this->load->model('Sales_invoice_model');
    }

	public function _remap($uri,$sec_uri){
		if($uri == "index") {
			$this->loadIndex(); //name, script , data, css, uri
		} else if($uri != null && $sec_uri == null){
			$this->loadSpecificInvoice($uri);
		} else if ($uri == 'edit') {
			$this->editInvoice($sec_uri);
		} else if ($uri == 'add' && $sec_uri == null) {
			$this->addInvoice();

		} else {
			header("LOCATION: ".site_url('sales-invoice'));
		}
	}

	public function loadIndex(){
		$data['sales_invoice'] = $this->Sales_invoice_model->get_all_sales_invoice();
		$this->view('sales_invoice','scripts/sales_invoice.js',$data,null,'sales-invoice');
	}

	public function loadSpecificInvoice($uri){
		$data['sales_invoice'] = $this->Sales_invoice_model->get_specific_sales_invoice($uri);
		$data['sales_invoice_products'] = $this->Sales_invoice_model->get_invoice_products($uri);
		$this->view('specific_sales_invoice','scripts/specific_sales_invoice.js',$data,null,'sales-invoice'); //name, script , data, css, uri
	}

	public function editInvoice($sec_uri){
		$data['sales_invoice'] = $this->Sales_invoice_model->get_specific_sales_invoice($sec_uri[0]);
		$data['sales_invoice_products'] = $this->Sales_invoice_model->get_invoice_products($sec_uri[0]);
		$this->view('edit_invoice',null,$data,null,'sales-invoice'); //name, script , data, css, uri
	}

	public function addInvoice(){
		$data = array(
			'name' => 'yeah',
		);
		echo json_encode($data);
	}
}
