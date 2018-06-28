<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Backmodel extends CI_Model {

// CRUD User
	function c_user($data) {
		$this->db->insert('user', $data);
	}	
	function r_user($id) {
		$this->db->select('*');
		$this->db->from('user');
		$this->db->where('id', $id);
		
		$q = $this->db->get();
		
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $row)
			{
			    $data[] = $row;
			}		
			return $data;
		}
	}	
	function ra_user() {
		$this->db->select('*');
		$this->db->from('user');
		
		$q = $this->db->get();
		
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $row)
			{
			    $data[] = $row;
			}
			return $data;
		}
	}	
	function u_user($id, $data) {
		$this->db->where('id', $id);
		$this->db->update('user', $data); 
	}
	function d_user($id) {
		$this->db->where('id', $id);
		$this->db->delete('user'); 	
	}
// End CRUD User


// CRUD News
	function c_news($data) {
		$this->db->insert('news', $data);
		
		$insertedID = $this->db->insert_id();
		return $insertedID;
	}	
	function c_news_lang($data) {
		$this->db->insert('langNews', $data);
	}
	function r_news($id, $lang) {
		$this->db->select('*');
		$this->db->from('news');
		$this->db->where('idNews', $id);
		$this->db->join('langNews', 'langNews.idNewsL = news.idNews', 'left');
		if ($lang != '') {
			$this->db->where('lang', $lang);
		}
		
		$q = $this->db->get()->result();
		return $q[0];
	}	
	function ra_news($limit, $lang) {
		$this->db->select('*');
		$this->db->from('news');
		$this->db->join('langNews', 'langNews.idNewsL = news.idNews', 'left');
		$this->db->order_by("createdOn","desc");
		if ($limit != '') {
			$this->db->limit($limit);
		}
		if ($lang != '') {
			$this->db->where('lang', $lang);
		}

		$q = $this->db->get();		
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
			    $data[] = $row;
			}
			return $data;
		}
	}
	function r_news_limit($limit) {
		$this->db->select('*');
		$this->db->from('news');
		$this->db->join('langNews', 'langNews.idNewsL = news.idNews', 'left');
		if ($limit != '') {
			$this->db->limit($limit);
		}
		$this->db->where('lang', 'en');
		

		$q = $this->db->get();		
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
			    $data[] = $row;
			}
			return $data;
		}
	}
	function u_news($id, $data) {
		$this->db->where('idNews', $id);
		$this->db->update('news', $data); 
	}
	function u_news_lang($id, $lang, $data) {
		$this->db->where('idNewsL', $id);
		$this->db->where('lang', $lang);
		$this->db->update('langNews', $data); 
	}
	function d_news($id) {
		$this->db->where('idNews', $id);
		$this->db->delete('news'); 	
	}
// End CRUD News

// CRUD Product
	function c_product($data) {
		$this->db->insert('product', $data);
		
		$insertedID = $this->db->insert_id();
		return $insertedID;
	}
	function c_product_lang($data) {
		$this->db->insert('langProduct', $data);
	}
		
	function r_product($id, $lang) {
		$this->db->select('*');
		$this->db->from('product');
		$this->db->where('idProduct', $id);
		$this->db->join('langProduct', 'langProduct.idProductL = product.idProduct', 'left');
		$this->db->join('discount', 'discount.idProductD = product.idProduct', 'left');
		if ($lang != '') {
			$this->db->where('lang', $lang);
		}
		
		$q = $this->db->get()->result();
		return $q[0];
	}
	function r_product_limit($limit) {
		$this->db->select('*');
		$this->db->from('product');
		$this->db->join('langProduct', 'langProduct.idProductL = product.idProduct', 'left');
		$this->db->join('discount', 'discount.idProductD = product.idProduct', 'left');
		if ($limit != '') {
			$this->db->limit($limit);
		}
		$this->db->where('lang', 'it');
		

		$q = $this->db->get();		
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
			    $data[] = $row;
			}
			return $data;
		}
	}
	function ra_product($limit, $lang) {
		$this->db->select('*');
		$this->db->from('product');
		$this->db->join('langProduct', 'langProduct.idProductL = product.idProduct', 'left');
		if ($limit != '') {
			$this->db->limit($limit);
		}
		if ($lang != '') {
			$this->db->where('lang', $lang);
		}
		$this->db->order_by('idProduct', 'desc');	
		
		$q = $this->db->get();		
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $row)
			{
			    $data[] = $row;
			}
			return $data;
		}

	}
	function u_product($id, $data) {
		$this->db->where('idProduct', $id);
		$this->db->update('product', $data); 
	}
	function u_product_lang($id, $lang, $data) {
		$this->db->where('idProductL', $id);
		$this->db->where('lang', $lang);
		$this->db->update('langProduct', $data); 
	}	
	function d_product($id) {
		$this->db->where('id', $id);
		$this->db->delete('product'); 	
	}
// End CRUD Product

// CUD Product Discount
function c_product_discount($data) {
	$this->db->insert('discount', $data);
	
	$insertedID = $this->db->insert_id();
	return $insertedID;
}
function u_product_discount($id, $data) {
	$this->db->where('idProductD', $id);
	$this->db->update('discount', $data); 
}
function d_product_discount($id) {
	$this->db->where('idDiscount', $id);
	$this->db->delete('discount'); 
}
// END CUD Product Discount

// CD Photo 
	function r_photo($id) {
		$this->db->select('*');
		$this->db->from('photo');
		$this->db->where('idPhoto', $id);
		
		$q = $this->db->get()->result();
		return $q[0];
	}
	function ra_photo_product($id) {
		$this->db->select('*');
		$this->db->from('photo');
		$this->db->where('idProductP', $id);
		
		$q = $this->db->get();
		
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $row)
			{
			    $data[] = $row;
			}
			return $data;
		}
	}
	function c_photo($data) {
		$this->db->insert_batch('photo', $data);
	}
	function d_photo($id) {
		$this->db->where('idPhoto', $id);
		$this->db->delete('photo'); 	
	}
// END CD Photo

// CRUD Category
	function c_category($data) {
		$this->db->insert('category', $data);
		
		return $this->db->insert_id();
	}
	function ra_category() {
		$this->db->select('*');
		$this->db->from('category');
		$this->db->order_by('nameCategory', 'asc');
		
		$q = $this->db->get();
		
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
			    $data[] = $row;
			}
			return $data;
		}
	}
	function r_category($id) {
		$this->db->select('*');
		$this->db->from('category');
		$this->db->where('idCategory', $id);
		
		$q = $this->db->get()->result();
		return $q[0];
	}
	function u_category($id,$data) {
		$this->db->where('idCategory', $id);
		$this->db->update('category', $data); 
	}
	function d_category($id) {
		$this->db->where('idCategory', $id);
		$this->db->delete('category'); 	
	}
	function d_category_subcategories($id) {
		$this->db->where('idCategoryS', $id);
		$this->db->delete('subcategory');	
	}
// End CRUD Category

// CRUD Subcategory
	function c_subcategory($data) {
		$this->db->insert('subcategory', $data);
	}
	function r_subcategory($id) {
		$this->db->select('*');
		$this->db->from('subcategory');
		$this->db->where('idSubcategory', $id);
		
		$q = $this->db->get()->result();
		return $q[0];
	}
	function ra_subcategory() {
		$this->db->select('*');
		$this->db->from('subcategory');
		$this->db->order_by('nameSubcategory', 'asc');
		
		$q = $this->db->get();
		
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
			    $data[] = $row;
			}
			return $data;
		}
	}
	function ra_subcategory_category($id) {
		$this->db->select('*');
		$this->db->from('subcategory');
		$this->db->where('idCategoryS', $id);
		
		$q = $this->db->get();
		
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
			    $data[] = $row;
			}
			return $data;
		}
	}
	function u_subcategory($id,$data) {
		$this->db->where('idSubcategory', $id);
		$this->db->update('subcategory', $data); 
	}
	function u_subcategory_product($id, $data) {
		$this->db->where('idSubcategoryP', $id);
		$this->db->update('product', $data); 
	}
	function d_subcategory($id) {
		$this->db->where('idSubcategory', $id);
		$this->db->delete('subcategory'); 	
	}
	
	function d_subcategory_category($id) {
		$this->db->where('idCategoryS', $id);
		$this->db->delete('subcategory');
	}
// End CRUD Subcategory

// RD Newsletter
	function ra_newsletter() {
		$this->db->select('*');
		$this->db->from('newsletter');
		
		$q = $this->db->get();
		
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $row)
			{
			    $data[] = $row;
			}	
			return $data;
		}
	}	
	function d_newsletter($id) {
		$this->db->where('id', $id);
		$this->db->delete('newsletter'); 	
	}
// End RD Newsletter

}
