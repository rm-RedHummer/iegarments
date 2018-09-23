<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('Main_Controller.php');

class Sales_invoice extends Main_Controller {
	public function __construct()
    {
        parent::__construct();
    }  
	public function index()
	{
		$this->view('sales_invoice',null,null,null,'sales-invoice'); //name, script , data, css
	}
}
