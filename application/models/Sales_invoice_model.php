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
  function add_invoice($invoice){
    return $this->db->insert('sales_invoice', $invoice);
  }
  function add_invoice_products($array){
    return $this->db->insert('sales_invoice_products',$array);
  }
  function update_invoice($invoice){
    $this->db->set('number',$invoice['number']);
    $this->db->set('company',$invoice['company']);
    $this->db->set('address',$invoice['address']);
    $this->db->set('date',$invoice['date']);
    $this->db->set('week',$invoice['week']);
    $this->db->where('number',$invoice['number']);

    return $this->db->update('sales_invoice');
  }
  function update_invoice_products($invoice){
    // return $this->db->replace('sales_invoice_products',$array);

    $this->db->set('invoice_number',$invoice['invoice_number']);
    $this->db->set('description',$invoice['description']);
    $this->db->set('size',$invoice['size']);
    $this->db->set('quantity',$invoice['quantity']);
    $this->db->set('unit',$invoice['unit']);
    $this->db->set('cost',$invoice['cost']);
    $this->db->where('id',$invoice['id']);

    return $this->db->update('sales_invoice_products');
  }
}
