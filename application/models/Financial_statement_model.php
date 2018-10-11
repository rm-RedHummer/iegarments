<?php
class Financial_statement_model extends CI_Model {
  function get_cashflow_monthly($month){
    $this->db->from('financial_statement');
    $this->db->where('month',$month);
    return $this->db->get()->result();
  }

  function get_total($type){
    $this->db->select('id,month,SUM(value) as total');
    $this->db->from('financial_statement');
    $this->db->where('type',$type);
    $this->db->group_by('month');
    $this->db->order_by('id','ASC');
    return $this->db->get()->result();
  }

  // function get_all_account_receivable(){
  //    $this->db->from('acc_receivable_sub_ledger');
  //   return $this->db->get()->result();
  // }
  // function get_per_month($month){
  //   $this->db->from('acc_receivable_sub_ledger');
  //   $this->db->where('month',$month);
  //   $this->db->order_by('week','ASC');
  //   $this->db->order_by('account_name','ASC');
  //   return $this->db->get()->result();
  // }
  // function count_week_of_month($month){
  //   $this->db->from('acc_receivable_sub_ledger');
  //   $this->db->group_by(array("week", "day"));
  //   $this->db->where('month',$month);
  //   return $this->db->get()->result();
  // }
  // function get_week_total($month){
  //   $this->db->select('week,account_name, sum(debit) as debit, sum(credit) as credit, sum(balance) as balance');
  //   $this->db->from('acc_receivable_sub_ledger');
  //   $this->db->where('month',$month);
  //   $this->db->group_by(array("week", "account_name"));
  //   $this->db->order_by('week','ASC');
  //   $this->db->order_by('account_name','ASC');
  //   return $this->db->get()->result();
  //
  // }


}
