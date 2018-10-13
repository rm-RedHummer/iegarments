<?php
defined('BASEPATH') OR exit('No direct script access allowed');
include('Main_Controller.php');

class saveInvoice extends Main_Controller {
	public function __construct()
    {
        parent::__construct();
				$this->load->model('Sales_invoice_model');
    }

    public function index() {
      $number = $this->input->post('number');
      $company = $this->input->post('company');
      $address = $this->input->post('address');
      $date = $this->input->post('date');
      $week = $this->input->post('week');
      $data = array(
  			'number' => $number,
        'company' => $company,
        'address' => $address,
        'date' => $date,
        'week' => $week
  		);
      $result = $this->Sales_invoice_model->update_invoice($data);

      $prodArray = $this->input->post('prodArray');

      for ($ctr=0; $ctr < count($prodArray); $ctr++) {
        $tempArray = array();
        $tempArray["invoice_number"] = $number;
        $cols = array("description","size","quantity","unit","cost","id");
        for ($i=0; $i < count($prodArray[$ctr]); $i++) {
          $tempArray[$cols[$i]] = $prodArray[$ctr][$i];
        }
        $res = $this->Sales_invoice_model->update_invoice_products($tempArray);
      }

  		echo json_encode(array('result'=>$result));
    }
}
