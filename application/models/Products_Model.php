<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Products_Model extends CI_Model{



public function getProducts($id = false) {
    $this->db->select('product.product_id, product.prod_name, product.prod_descr, product.prod_price, product.company_id, product.supplier_id, product.product_type_id, product.product_stock, product.image, company.company_name, product_type.category, supplier.supplier_name');
    $this->db->from('product');
    $this->db->join('company', 'product.company_id = company.company_id');
    $this->db->join('product_type', 'product.product_type_id = product_type.product_type_id');
     $this->db->join('supplier', 'product.supplier_id = supplier.supplier_id');
    
    if ($id) {
        $this->db->where('product.product_id', $id);
    }
    
    $query = $this->db->get();
    return $query->result();
}




public function getproducttype($id=false){
    $this->db->select('product_type_id, category');
    $query = $this->db->get('product_type');

    if($id){
      $this->db->where(array('product_type_id'=> $id));
    }
 
       return $query->result();
}

public function deleteproducts($product_id){
  $this->db->where('product_id', $product_id);
        $this->db->delete('product');
}



public function ordersData() {
    $query = $this->db->select('o.order_id, c.customer_id, CONCAT(c.c_fname, " ", c.c_lname) AS Customer_Name, c.c_address,p.prod_price, p.prod_name, c_email, p.image')
                      ->from('order o')
                      ->join('product p', 'o.product_id = p.product_id')
                      ->join('customer c', 'o.customer_id = c.customer_id','LEFT')
                      ->get();


     

    $result = $query->result();


    return $result;
   
}


        public function deletesupplier($supplier_id){
          $this->db->where('supplier_id', $supplier_id);
                $this->db->delete('supplier');
        }



        public function deletecategory($product_type_id){
          $this->db->where('product_type_id', $product_type_id);
                $this->db->delete('product_type');
        }

public function getProductsByCategory($category)
{
    $this->db->select('*');
    $this->db->from('product');
    $this->db->join('product_type', 'product.product_type_id = product_type.product_type_id');
    $this->db->where('product_type.product_type_id', $category);
    $query = $this->db->get();

    if ($query->num_rows() > 0) {
        return $query->result();
    } else {
        return false;
    }
}



 public function deletecompany($company_id){
          $this->db->where('company_id', $company_id);
                $this->db->delete('company');
        }



        public function getCustomerOrders($customerId)
{
    $query = $this->db->select('o.order_id, c.customer_id, CONCAT(c.c_fname, " ", c.c_lname) AS Customer_Name, c.c_address,p.prod_price, p.prod_name, c_email, p.image')
                      ->from('order o')
                      ->join('product p', 'o.product_id = p.product_id')
                      ->join('customer c', 'o.customer_id = c.customer_id','LEFT')
                     ->where('o.customer_id', $customerId);
    $query = $this->db->get();

    return $query->result();
}

        
}