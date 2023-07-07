<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Dashboard_Model extends CI_Model{
public function getcustomers(){
    $this->db->select('customer_id, c_fname, c_lname, c_address, c_email, c_user');
    $query = $this->db->get('customer');
       return $query->result();
}

public function delete_customer($customer_id){

  $this->db->where('customer_id', $customer_id);
        $this->db->delete('customer');
  }
    
    function search($searchQuery) {
        $this->db->select('product_id, prod_name, prod_descr, prod_price, product_supplier, product_type_id, product_stock, image');
  $this->db->from('product');
  $this->db->like('prod_name', $searchQuery); 
  $this->db->or_like('prod_descr', $searchQuery); 
  $this->db->or_like('product_supplier', $searchQuery); 
  $this->db->or_like('product_type_id', $searchQuery);

  $query = $this->db->get();

  return $query->result();
    }


public function deleteorders($order_id){
  $this->db->where('order_id', $order_id);
        $this->db->delete('order');
}


    public function getsupplier(){
    $this->db->select('supplier_id, email, supplier_name, address');
    $query = $this->db->get('supplier');
       return $query->result();
}


 public function getcompany(){
    $this->db->select('company_id, email, company_name, address');
    $query = $this->db->get('company');
       return $query->result();
}


  public function gettype(){
    $this->db->select('product_type_id, category');
    $query = $this->db->get('product_type');
       return $query->result();
}

    }

  
