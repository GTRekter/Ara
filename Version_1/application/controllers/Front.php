<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Front extends CI_Controller {

// Language
	function switchLanguage() {
		$language = $this->uri->segment(3);
        $language = ($language != "") ? $language : "italian";
        $this->session->set_userdata('site_lang', $language);
        redirect($this->input->get('currentURL'));
    }

// Login
	public function login() {	
		$data['page'] = 'login';
		$this->load->view('admin/login',$data);
	}	
	function autenticate() {
		
		$this->load->library('form_validation');
		
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('password', 'Password', 'trim|required');
		
		$this->form_validation->set_message('required', 'Compila il campo %s.');
		
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('message', 'Compila i campi obbligatori!');
			redirect('front/login');
		} else {
			$this->validate_credentials($this->input->post('email'), $this->input->post('password'));
		}
	}
	function validate_credentials($email, $password) {	
		$query = $this->frontmodel->validate($email, $password);
		if ($query) {
			$data = array(
				'username' => $email,
				'is_logged_in' => true
			);
			
			$this->session->set_userdata($data);
			redirect('back');
			
		} else {
			$this->session->set_flashdata('message', 'Utente non trovato. Controlla le tue credenziali e prova di nuovo!');
			redirect('front/login');
		}
	}
// End Login

// PRESENTATIONS
	// Home
	public function index() {
		$data['page'] = 'index';
 	
		$this->load->view('header', $data);
		
		// Categories
		$data['categories'] = $this->frontmodel->ra_category();
		$data['subcategories'] = $this->frontmodel->ra_subcategory();
		$this->load->view('nav', $data);
		
		// Products
		$data['products'] = $this->frontmodel->ra_product(4, substr($this->session->userdata('site_lang'), 0, 2));
		// News
		$data['news'] = $this->frontmodel->ra_news(2, substr($this->session->userdata('site_lang'), 0, 2));
		$this->load->view('home', $data);
		
		$this->load->view('footer');
	}
	
	// About
	public function about() {
		$data['page'] = 'about';
		
		$this->load->view('header', $data);
		
		// Categories
		$data['categories'] = $this->frontmodel->ra_category();
		$data['subcategories'] = $this->frontmodel->ra_subcategory();
		$this->load->view('nav', $data);
		
		$this->load->view('about');
		
		$this->load->view('footer');
	}
	
	// Privacy
	public function privacy() {
		$data['page'] = 'privacy';
		
		$this->load->view('header', $data);
		
		// Categories
		$data['categories'] = $this->frontmodel->ra_category();
		$data['subcategories'] = $this->frontmodel->ra_subcategory();
		$this->load->view('nav', $data);
		
		$this->load->view('privacy');
		
		$this->load->view('footer');
	}
	
	// Cookie
	public function cookie() {
		$data['page'] = 'cookie';
		
		$this->load->view('header', $data);
		
		// Categories
		$data['categories'] = $this->frontmodel->ra_category();
		$data['subcategories'] = $this->frontmodel->ra_subcategory();
		$this->load->view('nav', $data);
		
		$this->load->view('cookie');
		
		$this->load->view('footer');
	}
	
	// Products / Collections
	public function products() {
		
		// Getting all the expected values
		$searchData = array(
			'idCategoryS' => $this->input->get('cat'),
			'idSubcategoryP' => $this->input->get('subcat'),
			'brand' => $this->input->get('brand'),
			'search' => $this->input->get('search')
		);
		// Deleting the empty or 0 ones
		foreach ($searchData as $key => $value) {
			if ($value == '0' || $value == '') {
				unset($searchData[$key]);
			}
		}
		
		// Header Data
		$data['page'] = 'products';
		$data['searchData'] = $searchData;
		// Header
		$this->load->view('header', $data);
		
		// Nav and Categories
		$data['categories'] = $this->frontmodel->ra_category();
		$data['subcategories'] = $this->frontmodel->ra_subcategory();
		$this->load->view('nav', $data);
		
		// The search field values
		$data['search'] = array(
			'cat' => $this->input->get('cat'),
			'subcat' => $this->input->get('subcat'),
			'brand' => $this->input->get('brand'),
			'search' => $this->input->get('search')
		);
		
		// Prepairing the link for pagination base_url
		$i = 0;
		$len = count($data['search']);
		$searchString = '?';
		foreach ($data['search'] as $key => $value) {
			$searchString = $searchString . $key . '=' . $value;
			if ($i != $len - 1) {
				$searchString = $searchString . '&';
			}
			$i++;
		}
		
		// Pagination
		$this->load->library('pagination');
		$config['base_url'] = site_url('front/products' . $searchString);
		$config['total_rows'] = $this->frontmodel->search_count($searchData, substr($this->session->userdata('site_lang'), 0, 2));
		$config['per_page'] = 5;
		$config['page_query_string'] = TRUE;
		$config['use_page_numbers'] = TRUE;
		$config['query_string_segment'] = 'p';
		$config['cur_tag_open'] = '<span class="ct-main activep">';
		$config['cur_tag_close'] = '</span>';
		$config['last_link'] = '<i class="icon icon-media-next"></i>';
		$config['first_link'] = '<i class="icon icon-media-previous"></i>';
		$config['next_link'] = '<i class="icon icon-chevron-right"></i>';
		$config['prev_link'] = '<i class="icon icon-chevron-left"></i>';
		
		$this->pagination->initialize($config);
		// For viewing pagination section
		if ($config['per_page'] >= $config['total_rows']) {
			$data['pagination'] = false;
		} else {
			$data['pagination'] = true;
		}
		
		// Content
		// Get Products
		if ($this->input->get('p') >= 1) {
			$data['products'] = $this->frontmodel->search($searchData, $config['per_page'], ($this->input->get('p') - 1) * $config['per_page'], substr($this->session->userdata('site_lang'), 0, 2));
		} else {
			$data['products'] = $this->frontmodel->search($searchData, $config['per_page'], 0, substr($this->session->userdata('site_lang'), 0, 2));
		}
		
		// Brands
		$data['brands'] = $this->frontmodel->distinct_brand();
		
		// Count
		$data['brand_products'] = $this->frontmodel->count_brand();
		
		$this->load->view('products', $data);
		$this->load->view('footer');
	}
	
	// Single Product
	public function product() {
		$data['page'] = 'product';
		
		// Product
		$data['product'] = $this->frontmodel->r_product($this->uri->segment(3), substr($this->session->userdata('site_lang'), 0, 2));
	
		$this->load->view('header', $data);
		
		// Increment Views
		$this->frontmodel->i_product_view($this->uri->segment(3));	
		
		// Gallery
		$data['productImages'] = $this->frontmodel->ra_product_gallery($this->uri->segment(3));
		
		// Categories
		$data['categories'] = $this->frontmodel->ra_category();
		$data['subcategories'] = $this->frontmodel->ra_subcategory();
		$this->load->view('nav', $data);
		
		// Related Products
		$data['related_products'] = $this->frontmodel->ra_product(4, substr($this->session->userdata('site_lang'), 0, 2));
		
		$this->load->view('product', $data);
		$this->load->view('footer');
	}
	
	// Blog / All News
	public function blog() {
		
		// Getting all the expected values
		$searchData = array(
			'year' => $this->input->get('y')
		);
		// Deleting the empty or 0 ones
		foreach ($searchData as $key => $value) {
			if ($value == '0' || $value == '') {
				unset($searchData[$key]);
			}
		}
		
		// Header Data
		$data['page'] = 'blog';
		$data['searchData'] = $searchData;
		// Header
		$this->load->view('header', $data);
		
		// Nav and Categories
		$data['categories'] = $this->frontmodel->ra_category();
		$data['subcategories'] = $this->frontmodel->ra_subcategory();
		$this->load->view('nav', $data);
		
		// The search field values
		$data['search'] = array(
			'y' => $this->input->get('y')
		);
		
		// Prepairing the link for pagination base_url
		$i = 0;
		$len = count($data['search']);
		$searchString = '?';
		foreach ($data['search'] as $key => $value) {
			$searchString = $searchString . $key . '=' . $value;
			if ($i != $len - 1) {
				$searchString = $searchString . '&';
			}
			$i++;
		}
		
		// Pagination
		$this->load->library('pagination');
		$config['base_url'] = site_url('front/blog' . $searchString);
		$config['total_rows'] = $this->frontmodel->search_count_news($searchData, substr($this->session->userdata('site_lang'), 0, 2));
		$config['per_page'] = 2;
		$config['page_query_string'] = TRUE;
		$config['use_page_numbers'] = TRUE;
		$config['query_string_segment'] = 'p';
		$config['cur_tag_open'] = '<span class="ct-main activep">';
		$config['cur_tag_close'] = '</span>';
		$config['last_link'] = '<i class="icon icon-media-next"></i>';
		$config['first_link'] = '<i class="icon icon-media-previous"></i>';
		$config['next_link'] = '<i class="icon icon-chevron-right"></i>';
		$config['prev_link'] = '<i class="icon icon-chevron-left"></i>';
		
		$this->pagination->initialize($config);
		// For viewing pagination section
		if ($config['per_page'] >= $config['total_rows']) {
			$data['pagination'] = false;
		} else {
			$data['pagination'] = true;
		}
		
		// Content
		// Get Products
		if ($this->input->get('p') >= 1) {
			$data['news'] = $this->frontmodel->search_news($searchData, $config['per_page'], ($this->input->get('p') - 1) * $config['per_page'], substr($this->session->userdata('site_lang'), 0, 2));
		} else {
			$data['news'] = $this->frontmodel->search_news($searchData, $config['per_page'], 0, substr($this->session->userdata('site_lang'), 0, 2));
		}
		
		// Years
		$data['years'] = $this->frontmodel->ra_news_years(substr($this->session->userdata('site_lang'), 0, 2));
		
		$this->load->view('blog', $data);
		$this->load->view('footer');
	}
	
	
	
	
	// Single Post / News
	public function post() {
		$data['page'] = 'post';
		
		// News Post
		$data['news'] = $this->frontmodel->r_news($this->uri->segment(3), substr($this->session->userdata('site_lang'), 0, 2));
	
		$this->load->view('header', $data);
		
		// Categories
		$data['categories'] = $this->frontmodel->ra_category();
		$data['subcategories'] = $this->frontmodel->ra_subcategory();
		$this->load->view('nav', $data);
		
		// Increment Views
		$this->frontmodel->i_news_view($this->uri->segment(3));	
		
		$this->load->view('post', $data);
		$this->load->view('footer');
	}
// END PRESENTATIONS

// ACTIONS
	// Newsletter
	public function c_newsletter() {

		//Form Validation
		$this->load->library('form_validation');
		
		// Rules
		$this->form_validation->set_rules('newEmail', 'newEmail', 'trim|required');
		// Messages
		$this->form_validation->set_message('required', 'Riempi il campo %s');
		//End Form Validation

		if ($this->form_validation->run() == FALSE) {
			// Validation Errors
			$this->session->set_flashdata('message', validation_errors());
			// Returning to Checkout Page
			redirect($this->input->post('currentURL'));
		} else {
			
			// Email Library
			$this->load->library('email');
			$config['mailtype'] = 'html';
			$this->email->initialize($config);
			
			// Email to Admin
			$this->email->from('info@ragssoutlet.it');
			$this->email->subject('Ragss WebSite | Nuovo Inscritto alla newsletter');
			$this->email->to('info@ragssoutlet.it');
					
			$message = 
			"<h1> Nuovo Iscritto alla newsletter</h1>"
			."<p> Email:</p>". $this->input->post('newEmail');
			
			$this->email->message($message);
			$this->email->send();
			// End Email to Admin
			
			$data = array(
				'email' => $this->input->post('newEmail'),
				'createdOn' => date("Y-m-d")
			);
			
			$this->frontmodel->c_newsletter($data);
			
			$this->session->set_flashdata('message', 'Newsletter inviata con successo');
			redirect($this->input->post('currentURL'));
		}
	}
	
	// Contact Form	
	public function send_contact_form() {
		// Validating the form
		$this->load->library('form_validation');
		$this->form_validation->set_rules('name', 'Nome Cognome', 'trim|required');
		$this->form_validation->set_rules('email', 'Email', 'trim|valid_email|required');
		$this->form_validation->set_rules('privacy', 'Messaggio', 'trim|required|greater_than[0]');
		$this->form_validation->set_rules('message', 'Messaggio', 'trim|required');
		
		if ($this->form_validation->run() == FALSE) {
			$this->session->set_flashdata('message', 'Compila tutti i campi richiesti.');
			redirect($this->input->post('currentURL'));
		} else {	
			// Email Library
			$this->load->library('email');
			
			$config['mailtype'] = 'html';
			
			$this->email->initialize($config);
			
			// Email To Ragss
			$this->email->from($this->input->post('email'), ucwords($this->input->post('nome')));
			$this->email->to('ragss.outlet@gmail.com');
			$this->email->subject('Messaggio sito da: '.ucwords($this->input->post('nome')));
			$message = 
			'<b>Nome Cognome</b>: ' . ucwords($this->input->post('nome')) . '<br />'
			. '<b>Email Cliente</b>: ' . $this->input->post('email') . '<br />'
			. '<b>Messaggio</b>: ' . $this->input->post('messaggio') . '<br />';
			$this->email->message($message);
			$this->email->send();
			// End Email to Ragss
			
			$this->session->set_flashdata('message', 'Messaggio inviato con successo.');
			redirect($this->input->post('currentURL'));
		}
	}
// END ACTIONS
}
