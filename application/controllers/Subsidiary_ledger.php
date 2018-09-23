<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('Main_Controller.php');

class Subsidiary_ledger extends Main_Controller {
	public function __construct()
    {
        parent::__construct();
    }  
	public function index()
	{
		$this->view('subsidiary_ledger',null,null,null,'subsidiary'); //name, script , data, css
	}
}
