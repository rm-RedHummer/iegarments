<?php
class Account_receivable_model extends CI_Model {
  function get_all_account_receivable(){
     $this->db->from('acc_receivable_sub_ledger');
    return $this->db->get()->result();
  }
  function get_per_month($month){
    $this->db->from('acc_receivable_sub_ledger');
    $this->db->where('month',$month);
    $this->db->order_by('week','ASC');
    $this->db->order_by('account_name','ASC');
    return $this->db->get()->result();
  }
  function count_week_of_month($month){
    $this->db->from('acc_receivable_sub_ledger');
    $this->db->group_by(array("week", "day"));
    $this->db->where('month',$month);
    return $this->db->get()->result();
  }
  function get_week_total($month){
    $this->db->select('week,account_name, sum(debit) as debit, sum(credit) as credit, sum(balance) as balance');
    $this->db->from('acc_receivable_sub_ledger');
    $this->db->where('month',$month);
    $this->db->group_by(array("week", "account_name"));
    $this->db->order_by('week','ASC');
    $this->db->order_by('account_name','ASC');
    return $this->db->get()->result();

  }

  // function get_all_sales_invoice(){
  //    $this->db->from('sales_invoice');
  //    $this->db->order_by('number','ASC');
  //   return $this->db->get()->result();
  // }
  // function get_specific_sales_invoice($number){
  //   $this->db->select('*');
  //   $this->db->from('sales_invoice');
  //   $this->db->where('number',$number);
  //   return $this->db->get()->row();
  // }
  // function get_invoice_products($number){
  //   $this->db->select('*');
  //   $this->db->from('sales_invoice_products');
  //   $this->db->where('invoice_number',$number);
  //   return $this->db->get()->result();
  // }
  // function get_all_products(){
  //   $this->db->from('sales_invoice_products');
  //   $this->db->select('*');
  //   return $this->db->get()->result();
  // }
}
