<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('Main_Controller.php');

class Financial_statement extends Main_Controller {
	public function __construct()
  {
    parent::__construct();
  }
	public function index()
	{
		$this->view('financial_statement',null,null,'financialstatement.css','financial-statement'); //name, script , data, css
	}
}
