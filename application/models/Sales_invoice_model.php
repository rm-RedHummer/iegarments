<?php
class Sales_invoice_model extends CI_Model {

  function get_all_sales_invoice(){
     $this->db->from('sales_invoice');
     $this->db->order_by('number','ASC');
    return $this->db->get()->result();
  }
  function get_specific_sales_invoice($number){
    $this->db->select('*');
    $this->db->from('sales_invoice');
    $this->db->where('number',$number);
    return $this->db->get()->row();
  }
  function get_invoice_products($number){
    $this->db->select('*');
    $this->db->from('sales_invoice_products');
    $this->db->where('invoice_number',$number);
    return $this->db->get()->result();
  }
  function get_all_products(){
    $this->db->from('sales_invoice_products');
    $this->db->select('*');
    return $this->db->get()->result();
  }
}
