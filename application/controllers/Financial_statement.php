<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('Main_Controller.php');

class Financial_statement extends Main_Controller {
	public function __construct()
  {
    parent::__construct();
		$this->load->model('Financial_statement_model');
  }
	public function index()
	{
		$data['january'] = $this->Financial_statement_model->get_cashflow_monthly('january');
		$data['february'] = $this->Financial_statement_model->get_cashflow_monthly('february');
		$data['march'] = $this->Financial_statement_model->get_cashflow_monthly('march');
		$data['april'] = $this->Financial_statement_model->get_cashflow_monthly('april');
		$data['may'] = $this->Financial_statement_model->get_cashflow_monthly('may');
		$data['june'] = $this->Financial_statement_model->get_cashflow_monthly('june');
		$data['july'] = $this->Financial_statement_model->get_cashflow_monthly('july');
		$data['august'] = $this->Financial_statement_model->get_cashflow_monthly('august');
		$data['september'] = $this->Financial_statement_model->get_cashflow_monthly('september');
		$data['october'] = $this->Financial_statement_model->get_cashflow_monthly('october');
		$data['november'] = $this->Financial_statement_model->get_cashflow_monthly('november');
		$data['december'] = $this->Financial_statement_model->get_cashflow_monthly('december');
		$data['incomingtotal'] = $this->Financial_statement_model->get_total('incoming');
		$data['outgoingtotal'] = $this->Financial_statement_model->get_total('outgoing');
		$this->view('financial_statement',null,$data,'financialstatement.css','financial-statement'); //name, script , data, css
	}
}
