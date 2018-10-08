<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('Main_Controller.php');

class Sales_ledger extends Main_Controller {
	public function __construct()
    {
        parent::__construct();
				$this->load->model('Sales_invoice_model');
    }
	public function index()
	{
		$data['sales_products'] = $this->Sales_invoice_model->get_all_products();
		$data['sales_invoice'] = $this->Sales_invoice_model->get_all_sales_invoice();
		$this->view('sales_ledger',null,$data,null,'sales-ledger'); //name, script , data, css
	}
}
