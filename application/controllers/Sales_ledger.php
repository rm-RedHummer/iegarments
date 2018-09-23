<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('Main_Controller.php');

class Sales_ledger extends Main_Controller {
	public function __construct()
    {
        parent::__construct();
    }  
	public function index()
	{
		$this->view('sales_ledger',null,null,null,'sales-ledger'); //name, script , data, css
	}
}
