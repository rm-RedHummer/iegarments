<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('Main_Controller.php');

class Subsidiary_ledger extends Main_Controller {
	public function __construct()
    {
        parent::__construct();
				$this->load->model('Account_receivable_model');
    }
	public function index()
	{
		$data['january'] = $this->Account_receivable_model->get_per_month('january');
		$data['february'] = $this->Account_receivable_model->get_per_month('february');
		$data['march'] = $this->Account_receivable_model->get_per_month('march');
		$data['april'] = $this->Account_receivable_model->get_per_month('april');
		$data['may'] = $this->Account_receivable_model->get_per_month('may');
		$data['june'] = $this->Account_receivable_model->get_per_month('june');
		$data['july'] = $this->Account_receivable_model->get_per_month('july');
		$data['august'] = $this->Account_receivable_model->get_per_month('aug');
		$data['september'] = $this->Account_receivable_model->get_per_month('sept');
		$data['october'] = $this->Account_receivable_model->get_per_month('oct');
		$data['november'] = $this->Account_receivable_model->get_per_month('nov');
		$data['december'] = $this->Account_receivable_model->get_per_month('dec');

		$data['jan_count'] = $this->Account_receivable_model->count_week_of_month('january');
		$data['feb_count'] = $this->Account_receivable_model->count_week_of_month('february');
		$data['mar_count'] = $this->Account_receivable_model->count_week_of_month('march');
		$data['apr_count'] = $this->Account_receivable_model->count_week_of_month('april');
		$data['may_count'] = $this->Account_receivable_model->count_week_of_month('may');
		$data['jun_count'] = $this->Account_receivable_model->count_week_of_month('june');
		$data['jul_count'] = $this->Account_receivable_model->count_week_of_month('july');
		$data['aug_count'] = $this->Account_receivable_model->count_week_of_month('aug');
		$data['sep_count'] = $this->Account_receivable_model->count_week_of_month('sept');
		$data['oct_count'] = $this->Account_receivable_model->count_week_of_month('oct');
		$data['nov_count'] = $this->Account_receivable_model->count_week_of_month('nov');
		$data['dec_count'] = $this->Account_receivable_model->count_week_of_month('dec');

		$data['jan_total'] = $this->Account_receivable_model->get_week_total('january');
		$data['feb_total'] = $this->Account_receivable_model->get_week_total('february');
		$data['mar_total'] = $this->Account_receivable_model->get_week_total('march');
		$data['apr_total'] = $this->Account_receivable_model->get_week_total('april');
		$data['may_total'] = $this->Account_receivable_model->get_week_total('may');
		$data['jun_total'] = $this->Account_receivable_model->get_week_total('june');
		$data['jul_total'] = $this->Account_receivable_model->get_week_total('july');
		$data['aug_total'] = $this->Account_receivable_model->get_week_total('aug');
		$data['sep_total'] = $this->Account_receivable_model->get_week_total('sep');
		$data['oct_total'] = $this->Account_receivable_model->get_week_total('oct');
		$data['nov_total'] = $this->Account_receivable_model->get_week_total('nov');
		$data['dec_total'] = $this->Account_receivable_model->get_week_total('dec');


		$this->view('subsidiary_ledger',null,$data,null,'subsidiary'); //name, script , data, css
	}
}
