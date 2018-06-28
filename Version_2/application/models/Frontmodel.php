<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Frontmodel extends CI_Model {

// Validate login
function validate($email, $password) {
	$this->db->where('email', $email);
	$this->db->where('password', sha1($password));
	
	$q = $this->db->get('access');
	
	if ($q->num_rows() == 1) {
		foreach ($q->result() as $row)
		{
		    $data[] = $row;
		}
		
		return $data;
	}
}
	
// R Product 
	function ra_product($limit, $lang) {
		$this->db->select('*');
		$this->db->from('product');
		$this->db->join('langProduct', 'langProduct.idProductL = product.idProduct', 'left');
		$this->db->join('discount', 'discount.idProductD = product.idProduct', 'left');
		if ($limit != '') {
			$this->db->limit($limit);
		}
		if ($lang != '') {
			$this->db->where('lang', $lang);
		}
		$this->db->where('suspended', 0);
		

		$q = $this->db->get();		
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
			    $data[] = $row;
			}
			return $data;
		}
	}
	function r_product($id, $lang) {
		$this->db->select('*');
		$this->db->from('product');
		$this->db->join('langProduct', 'langProduct.idProductL = product.idProduct', 'left');
		$this->db->join('discount', 'discount.idProductD = product.idProduct', 'left');
		$this->db->where('idProduct', $id);
		if ($lang != '') {
			$this->db->where('lang', $lang);
		}
		
		$q = $this->db->get()->result();
		return $q[0];
	}
	
	function ra_product_gallery($id) {
		$this->db->select('*');
		$this->db->from('photo');
		$this->db->where('idProductP',  $id);
		
		$q = $this->db->get();		
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
			    $data[] = $row;
			}
			return $data;
		}

	}
// R News
	function ra_news($limit, $lang) {
		$this->db->select('*');
		$this->db->from('news');
		$this->db->join('langNews', 'langNews.idNewsL = news.idNews', 'left');
		if ($limit != '') {
			$this->db->limit($limit);
		}
		if ($lang != '') {
			$this->db->where('lang', $lang);
		}
		$this->db->where('suspended', 0);
		$this->db->order_by('createdOn', 'desc');
		

		$q = $this->db->get();		
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
			    $data[] = $row;
			}
			return $data;
		}
	}
	function r_news($id, $lang) {
		$this->db->select('*');
		$this->db->from('news');
		$this->db->join('langNews', 'langNews.idNewsL = news.idNews', 'left');
		$this->db->where('idNews', $id);
		if ($lang != '') {
			$this->db->where('lang', $lang);
		}
		
		$q = $this->db->get()->result();
		return $q[0];
	}
	function ra_news_years($lang) {
		$this->db->distinct();
		$this->db->select('YEAR(createdOn) as year');
		$this->db->from('news');
		$this->db->join('langNews', 'langNews.idNewsL = news.idNews', 'left');
		$this->db->where('suspended', 0);
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
	
// R Category
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

// R Subcategory
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

// R Distinct Brands
	function distinct_brand() {
		$this->db->select('brand');
		$this->db->distinct();
		$this->db->from('product');
		$this->db->where('suspended', 0);
		
		$q = $this->db->get();		
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
			    $data[] = $row;
			}
			return $data;
		}
	}
	
//	R Count
	function count_brand() {
		$this->db->select('brand,count(*) as "count"');
		$this->db->from('product');
		$this->db->group_by('brand');
		
		$q = $this->db->get();		
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
			    $data[] = $row;
			}
			return $data;
		}
	}
	
// Increment Views

	function i_product_view($id) {
		$this->db->where('idProduct', $id);
		$this->db->set('views', 'views+1', FALSE);
		$this->db->update('product');
	}
	
	function i_news_view($id) {
		$this->db->where('idNews', $id);
		$this->db->set('views', 'views+1', FALSE);
		$this->db->update('news');
	}
	
// Search
	function search($data, $limit, $offset, $lang) {
		$this->db->select('*');
		$this->db->from('product');
		if ($lang != '') {
			$this->db->where('lang', $lang);
		}
		$this->db->where('suspended', 0);
		// Preparing the query
		foreach ($data as $key => $value) {
			if ($key != 'search') {
				$this->db->where($key, $value);
			} else {
				$this->db->where('(MATCH (brand) AGAINST ("'. $value .'")', NULL, FALSE);
				$this->db->or_where('MATCH (name) AGAINST ("'. $value .'")', NULL, FALSE);
				$this->db->or_where('MATCH (description) AGAINST ("'. $value .'"))', NULL, FALSE);
			}
		}
		$this->db->join('langProduct', 'langProduct.idProductL = product.idProduct', 'left');
		$this->db->join('discount', 'discount.idProductD = product.idProduct', 'left');
		$this->db->join('subcategory', 'subcategory.idSubcategory = product.idSubcategoryP', 'left');
		$this->db->limit($limit, $offset);
		
		$q = $this->db->get();
		
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
			    $result[] = $row;
			}
			
			return $result;
		}
	}
	
	function search_count($data, $lang) {
		$this->db->select('*');
		$this->db->from('product');
		if ($lang != '') {
			$this->db->where('lang', $lang);
		}
		$this->db->where('suspended', 0);
		foreach ($data as $key => $value) {
			if ($key != 'search') {
				$this->db->where($key, $value);
			} else {
				$this->db->where('(MATCH (brand) AGAINST ("'. $value .'")', NULL, FALSE);
				$this->db->or_where('MATCH (name) AGAINST ("'. $value .'")', NULL, FALSE);
				$this->db->or_where('MATCH (description) AGAINST ("'. $value .'"))', NULL, FALSE);
			}
		}
		$this->db->join('langProduct', 'langProduct.idProductL = product.idProduct', 'left');
		$this->db->join('subcategory', 'subcategory.idSubcategory = product.idSubcategoryP', 'left');
		
		$q = $this->db->get();
		
		return $q->num_rows();
	}
	
// Search
	function search_news($data, $limit, $offset, $lang) {
		$this->db->select('*');
		$this->db->from('news');
		$this->db->join('langNews', 'langNews.idNewsL = news.idNews', 'left');
		// Preparing the query
		foreach ($data as $key => $value) {
			if ($key = 'year') {
				$this->db->like('createdOn', $value);
			} else {
				$this->db->where($key, $value);
			}
		}
		$this->db->where('suspended', 0);
		if ($lang != '') {
			$this->db->where('lang', $lang);
		}
		$this->db->order_by('createdOn', 'desc');
		$this->db->limit($limit, $offset);
		
		
		$q = $this->db->get();
		
		if ($q->num_rows() > 0) {
			foreach ($q->result() as $row) {
			    $result[] = $row;
			}
			
			return $result;
		}
	}
	
	function search_count_news($data, $lang) {
		$this->db->select('*');
		$this->db->from('news');
		$this->db->join('langNews', 'langNews.idNewsL = news.idNews', 'left');
		// Preparing the query
		foreach ($data as $key => $value) {
			if ($key = 'year') {
				$this->db->like('createdOn', $value);
			} else {
				$this->db->where($key, $value);
			}
		}
		$this->db->where('suspended', 0);
		if ($lang != '') {
			$this->db->where('lang', $lang);
		}
		
		$q = $this->db->get();
		
		return $q->num_rows();	
	}
	
	function c_newsletter($data) {
		$this->db->insert('newsletter', $data);
	}
}
