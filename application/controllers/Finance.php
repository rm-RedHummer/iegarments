<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('Main_Controller.php');

class Finance extends Main_Controller {
	public function __construct()
    {
        parent::__construct();
    }  
	public function index()
	{
		$this->view('finance_view',null,null,'finance.css',null); //name, script , data, css
	}
}
