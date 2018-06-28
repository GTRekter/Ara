<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Back extends CI_Controller {

// Login Check
	function __construct() {
		parent::__construct();
		$query = $this->is_logged_in();
		
		if ($query == false) {
			$this->session->set_flashdata('message','Per accedere al Pannello Admin devi prima eseguire il login!');
			redirect('front/login');
		}

		$this->load->model('backmodel');
	}
	
	function is_logged_in() {
		$is_logged_in = $this->session->userdata('is_logged_in');
		
		if (!isset($is_logged_in) || $is_logged_in != true) {
			return false;
		} else {
			return true;
		}
	}
	
	function logout() {
		$data = array('username', 'is_logged_in');
		$this->session->unset_userdata($data);
		
		$this->session->set_flashdata('message','Ciao, a presto!');
		redirect('front/login');
	}
// End Login Check

// PRESENTATIONS
	public function index() {	
		$data['page'] = 'index';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/nav', $data);
		
		/* News */
		$data['news'] = $this->backmodel->ra_news('', 'en');
		/* Products */
		$data['products'] = $this->backmodel->ra_product('', 'en');
		/* Newsletter */
		$data['newsletters'] = $this->backmodel->ra_newsletter();
	
		$this->load->view('admin/home', $data);
		$this->load->view('admin/footer');
	}
	
	// Product
	public function products() {
		$data['page'] = 'products';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/nav', $data);	
		
		/* Products */
		$data['products'] = $this->backmodel->ra_product('', 'it');
		
		
		
		$this->load->view('admin/products', $data);
		$this->load->view('admin/footer');
		
	}
	public function product() {	
		$data['page'] = 'product';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/nav', $data);	
		
		// Taking the Product
		$data['product'] = $this->backmodel->r_product($this->uri->segment(3), 'it');
		// Taking Product Photos
		$data['photos'] = $this->backmodel->ra_photo_product($this->uri->segment(3));
		
		// Categories
		$data['categories'] = $this->backmodel->ra_category();	
		$data['subcategories'] = $this->backmodel->ra_subcategory();
		
		$this->load->view('admin/product', $data);
		$this->load->view('admin/footer');
	}
	public function n_product() {	
		$data['page'] = 'product';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/nav', $data);
		
		// Categories
		$data['categories'] = $this->backmodel->ra_category();	
		$data['subcategories'] = $this->backmodel->ra_subcategory();
		
		$this->load->view('admin/n_product', $data);
		$this->load->view('admin/footer');
	}
	
	
	// Categories
	public function categories() {	
		$data['page'] = 'categories';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/nav', $data);	
		
		$data['categories'] = $this->backmodel->ra_category(); 
		$this->load->helper('text');
		$this->load->view('admin/categories', $data);
		$this->load->view('admin/footer');
	}
	public function category() {	
		$data['page'] = 'category';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/nav',$data);	
		
		$data['category'] = $this->backmodel->r_category($this->uri->segment(3)); 
		$this->load->view('admin/category', $data);
		$this->load->view('admin/footer');
	}
	public function n_category() {	
		$data['page'] = 'category';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/nav',$data);	
		
		$this->load->view('admin/n_category');
		$this->load->view('admin/footer');
	}
	
	// Subcategories
	public function subcategories() {	
		$data['page'] = 'categories';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/nav', $data);	
		
		// Categories
		$data['categories'] = $this->backmodel->ra_category();
		$data['subcategories'] = $this->backmodel->ra_subcategory(); 
		
		$this->load->view('admin/subcategories', $data);
		$this->load->view('admin/footer');
	}
	public function subcategory() {	
		$data['page'] = 'category';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/nav',$data);	
		
		// Categories
		$data['categories'] = $this->backmodel->ra_category();
		$data['subcategory'] = $this->backmodel->r_subcategory($this->uri->segment(3));
		
		$this->load->view('admin/subcategory', $data);
		$this->load->view('admin/footer');
	}
	public function n_subcategory() {	
		$data['page'] = 'category';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/nav',$data);	
		
		// Categories
		$data['categories'] = $this->backmodel->ra_category();
		
		$this->load->view('admin/n_subcategory', $data);
		$this->load->view('admin/footer');
	}
	
	// News Articles
	public function articles() {	
		$data['page'] = 'articles';
		$this->load->view('admin/header', $data);
		$this->load->view('admin/nav', $data);	
		
		$data['news'] = $this->backmodel->ra_news('','it'); 
		$this->load->helper('text');
		$this->load->view('admin/articles', $data);
		$this->load->view('admin/footer');
	}
	public function article() {	
		$data['page'] = 'article';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/nav',$data);	
		
		$data['article'] = $this->backmodel->r_news($this->uri->segment(3),'it'); 
		$this->load->view('admin/article', $data);
		$this->load->view('admin/footer');
	}
	public function n_article() {	
		$data['page'] = 'article';
		$this->load->view('admin/header',$data);
		$this->load->view('admin/nav',$data);	
		
		$this->load->view('admin/n_article');
		$this->load->view('admin/footer');
	}
	
	// Newsletter
	public function newsletter() {	
		$data['page'] = 'index';
		$this->load->view('admin/header');
		$this->load->view('admin/nav');	
		
		$data['newsletters'] = $this->backmodel->ra_newsletter(); 
		$this->load->view('admin/newsletters', $data);
		$this->load->view('admin/footer');
	}
	public function n_newsletter() {	
		$data['page'] = 'index';
		$this->load->view('admin/header');
		$this->load->view('admin/nav');	

		$this->load->view('admin/n_newsletter');
		$this->load->view('admin/footer');
	}
	
// END PRESENTATIONS

// ACTIONS
	// Product
	function c_product() {
		//Form Validation
		$this->load->library('form_validation');
		
		// Rules
		$this->form_validation->set_rules('name', 'Nome', 'trim|required');
		$this->form_validation->set_rules('brand', 'Modello', 'trim|required');
		$this->form_validation->set_rules('description', 'Descrizione', 'trim|required');
		$this->form_validation->set_rules('price', 'Prezzo', 'trim|required');
		// Messages
		$this->form_validation->set_message('required', 'Riempi il campo %s');
		//End Form Validation

		if ($this->form_validation->run() == FALSE) {
			// Validation Errors
			$this->session->set_flashdata('message', validation_errors());
			// Returning to Checkout Page
			redirect($this->input->post('currentURL'));
		} else {
			
			$cover = '';
			// Upload Cover
			$config['upload_path'] = './resources/img/product';
			$config['allowed_types'] = 'jpg|png';
				
			$this->load->library('upload');
			$this->upload->initialize($config);
				
			if ( ! $this->upload->do_upload('cover')) {
				$this->session->set_flashdata('message','Inserisci la foto cover nel formato indicato.');
				redirect($this->input->post('currentURL'));
				break;
			}
			else {
				$data = array('cover' => $this->upload->data());
				$cover = $data['cover']['file_name'];
			}
			// End Cover
			
			//Avoid NULL error
			if($this->input->post('suspended')!= NULL)
				{ $suspended= $this->input->post('suspended'); }
			else
				{ $suspended= '0'; }
				
			// Prepairing the Data for the Product
			$data = array(
				'idSubcategoryP' => $this->input->post('idSubcategoryP'),
				'cover' => $cover,
				'brand' => strtolower($this->input->post('brand')),
				'price' => $this->input->post('price'),
				'createdOn' => date("Y-m-d"),
				'suspended' => $suspended
			);
			// Saving Product to Database
			$returnedID = $this->backmodel->c_product($data);
			
			
		
			// Prepairing the Data for Italian
			$dataLang = array(
				'idProductL' => $returnedID,
				'name' => $this->input->post('name'),
				'description' => $this->input->post('description'),
				'lang' => 'it'
			);
			// Saving Language to Database
			$this->backmodel->c_product_lang($dataLang);
			
			$languages = array('en', 'es', 'fr', 'ru');
			foreach ($languages as $language) {
				// Prepairing the Data for the Language
				$dataLang = array(
					'idProductL' => $returnedID,
					'name' => $this->translate($this->input->post('name'), $language),
					'description' => $this->translate($this->input->post('description'), $language),
					'lang' => $language
				);
				// Saving Language to Database
				$this->backmodel->c_product_lang($dataLang);
			}
			
			$this->session->set_flashdata('message', 'Prodotto inserito con successo');
			redirect(site_url('back/products'));
		}
		
	}
	function u_product() {
		
		//Form Validation
		$this->load->library('form_validation');
		
		// Rules
		$this->form_validation->set_rules('brand', 'Modello', 'trim|required');
		$this->form_validation->set_rules('name', 'Nome', 'trim|required');
		$this->form_validation->set_rules('description', 'Descrizione', 'trim|required');
		$this->form_validation->set_rules('price', 'Prezzo', 'trim|required');
		// Messages
		$this->form_validation->set_message('required', 'Riempi il campo %s');
		//End Form Validation

		if ($this->form_validation->run() == FALSE) {
			// Validation Errors
			$this->session->set_flashdata('message', validation_errors());
			// Returning to Checkout Page
			redirect($this->input->post('currentURL'));
		} else {
			
			$cover = '';
			// Checking if Empty Cover 
			if (!($_FILES['cover']['size'] == 0)) {
				// Upload Cover
				$config['upload_path'] = './resources/img/product';
				$config['allowed_types'] = 'jpg|png';
					
				$this->load->library('upload');
				$this->upload->initialize($config);
					
				if ( ! $this->upload->do_upload('cover')) {
					$this->session->set_flashdata('message','Inserisci la foto cover nel formato indicato.');
					redirect($this->input->post('currentURL'));
					break;
				}
				else {
					$data = array('cover' => $this->upload->data());
					$cover = $data['cover']['file_name'];
				}
				// End Cover
			}
			
			// Prepairing the Data for the Product
			$data = array(
				'idSubcategoryP' => $this->input->post('idSubcategoryP'),
				'brand' => strtolower($this->input->post('brand')),
				'price' => $this->input->post('price'),
				'suspended' => $this->input->post('suspended')
			);
			if ($cover != '') {
				$data['cover'] = $cover;
			}
			// Updating Product
			$this->backmodel->u_product($this->input->post('idProduct'), $data);
			
			// Taking Old Product (for checking if description or name is different)
			$oldProduct = $this->backmodel->r_product($this->input->post('idProduct'), 'it');
			
			// Prepairing the Data for the Language
			$dataLang = array(
				'name' => $this->input->post('name'),
				'description' => $this->input->post('description')
			);
			// Updating Language
			$this->backmodel->u_product_lang($this->input->post('idProduct'), 'it', $dataLang);
			
			// Updating all Translations IF necessary
			if ($oldProduct->description != $this->input->post('description') || $oldProduct->name != $this->input->post('name')) {
				$languages = array('en', 'es', 'fr', 'ru');
				foreach ($languages as $language) {
					// Prepairing the Data for the Language
					$dataLang = array(
						'idProductL' => $this->input->post('idProduct'),
						'name' => $this->translate($this->input->post('name'), $language),
						'description' => $this->translate($this->input->post('description'), $language),
						'lang' => $language
					);
					// Saving Language to Database
					$this->backmodel->u_product_lang($this->input->post('idProduct'), $language, $dataLang);
				}
			}
			
			$this->session->set_flashdata('message', 'Prodotto modificato con successo');
			redirect($this->input->post('currentURL'));
		}
		
	}
	function c_discount() {
		//Form Validation
		$this->load->library('form_validation');
		
		// Rules
		$this->form_validation->set_rules('percentage', 'Sconto', 'trim|required|greater_than[0]');
		// Messages
		$this->form_validation->set_message('required', 'Riempi il campo %s');
		//End Form Validation

		if ($this->form_validation->run() == FALSE) {
			// Validation Errors
			$this->session->set_flashdata('message', validation_errors());
			// Returning to Checkout Page
			redirect($this->input->post('currentURL'));
		} else {
			$data = array(
				'idProductD' => $this->input->post('idProduct'),
				'percentage' => $this->input->post('percentage')
			);
			
			// Save to database
			$this->backmodel->c_product_discount($data);
			
			$this->session->set_flashdata('message', 'Offerta creata correttamente.');
			redirect('back/product/' . $this->input->post('idProduct'));
		}
	}
	
	function u_discount() {
		//Form Validation
		$this->load->library('form_validation');
		
		// Rules
		$this->form_validation->set_rules('percentage', 'Sconto', 'trim|required|greater_than[0]');
		// Messages
		$this->form_validation->set_message('required', 'Riempi il campo %s');
		//End Form Validation

		if ($this->form_validation->run() == FALSE) {
			// Validation Errors
			$this->session->set_flashdata('message', validation_errors());
			// Returning to Checkout Page
			redirect($this->input->post('currentURL'));
		} else {
			$data = array(
				'percentage' => $this->input->post('percentage')
			);
			
			// Save to database
			$this->backmodel->u_product_discount($this->input->post('idProduct'), $data);
			
			$this->session->set_flashdata('message', 'Offerta creata correttamente.');
			redirect('back/product/' . $this->input->post('idProduct'));
		}			
	}
	function d_discount() {
		// Delete Photo from Database
		$this->backmodel->d_product_discount($this->uri->segment(3));
		
		$this->session->set_flashdata('message', 'Offerta correttamente cancellata.');
		redirect('back/product/' . $this->uri->segment(4));
	}
	
	// Photo
	function c_photo() {   
		// Upload Path
		$config = array(
		    'upload_path' => './resources/img/product',
		    'allowed_types' => 'jpg|png',
		    'multi' => 'halt'
		);
		
		$this->load->library('upload', $config);
	   	
	   	if ( ! $this->upload->do_upload('files')) {
	   		$this->session->set_flashdata('message', 'Seleziona almeno un file da caricare. I file devono essere in formato jpg.');
	   		redirect($this->input->post('currentURL'));
	   	} else {	
	   		$data = array();
	   		$files = $this->upload->data();
	   		foreach ($files as $file) {
	   			$record = array(
	   				'idProductP' => $this->input->post('idProduct'),
	   				'file' => $file['file_name']
	   			);
	   			array_push($data, $record);
	   		}
	   		
	   		// Save to database
	   		$this->backmodel->c_photo($data);
	   		
	   		$this->session->set_flashdata('message', 'Foto correttamente caricate.');
	   		redirect($this->input->post('currentURL'));
	   	}
	}
	function d_photo() {
		// Delete Photo From Server
		$file = $this->backmodel->r_photo($this->uri->segment(3));
		unlink('./resources/img/product/'.$file->file);
		// Delete Photo from Database
		$this->backmodel->d_photo($this->uri->segment(3));
		
		$this->session->set_flashdata('message', 'Foto correttamente cancellata.');
		redirect('back/product/' . $this->uri->segment(4));
	}
	// End Photo
	
	public function d_product() {
		$this->backmodel->d_product($this->uri->segment(3)); 
		$this->session->set_flashdata('message', 'Prodotto cancellato con successo');
		redirect(site_url('back/products'));
	}
	
	// News Articles
	public function c_article() {
		//Form Validation
		$this->load->library('form_validation');
		
		// Rules
		$this->form_validation->set_rules('title', 'Titolo', 'trim|required');
		$this->form_validation->set_rules('subtitle', 'Sottotitolo', 'trim|required');
		$this->form_validation->set_rules('text', 'Testo', 'trim|required');
		// Messages
		$this->form_validation->set_message('required', 'Riempi il campo %s');
		//End Form Validation

		if ($this->form_validation->run() == FALSE) {
			// Validation Errors
			$this->session->set_flashdata('message', validation_errors());
			// Returning to Checkout Page
			redirect($this->input->post('currentURL'));
		} else {
			
			$cover = '';
			// Upload Cover
			$config['upload_path'] = './resources/img/news';
			$config['allowed_types'] = 'jpg|png';
				
			$this->load->library('upload');
			$this->upload->initialize($config);
				
			if ( ! $this->upload->do_upload('cover')) {
				$this->session->set_flashdata('message','Inserisci la foto cover nel formato indicato.');
				redirect($this->input->post('currentURL'));
				break;
			}
			else {
				$data = array('cover' => $this->upload->data());
				$cover = $data['cover']['file_name'];
			}
			// End Cover
			
			//Avoid NULL error
			if($this->input->post('suspended')!= NULL) { 
				$suspended= $this->input->post('suspended'); 
			} else { 
				$suspended= '0'; 
			}
			
			// Prepairing the Data for the Article
			$data = array(
				'cover' => $cover,
				'createdOn' => date("Y-m-d"),
				'suspended' => $suspended
			);
			// Saving Product to Database
			$returnedID = $this->backmodel->c_news($data);
			
			
			// Prepairing the Data for Italian
			$dataLang = array(
				'idNewsL' => $returnedID,
				'title' => $this->input->post('title'),
				'subtitle' => $this->input->post('subtitle'),
				'text' => $this->input->post('text'),
				'lang' => 'it'
			);
			// Saving Language to Database
			$this->backmodel->c_news_lang($dataLang);
			
			$languages = array('en', 'es', 'fr', 'ru');
			foreach ($languages as $language) {
				// Prepairing the Data for the Language
				$dataLang = array(
					'idNewsL' => $returnedID,
					'title' => $this->translate($this->input->post('title'), $language),
					'subtitle' => $this->translate($this->input->post('subtitle'), $language),
					'text' => $this->translate($this->input->post('text'), $language),
					'lang' => $language
				);
				// Saving Language to Database
				$this->backmodel->c_news_lang($dataLang);
			}
			
			$this->session->set_flashdata('message', 'News inserita con successo');
			redirect(site_url('back/articles'));
		}
		
	}
	public function u_article() {
	
		//Form Validation
		$this->load->library('form_validation');
		
		// Rules
		$this->form_validation->set_rules('title', 'Titolo', 'trim|required');
		$this->form_validation->set_rules('subtitle', 'Sottotitolo', 'trim|required');
		$this->form_validation->set_rules('text', 'Testo', 'trim|required');
		// Messages
		$this->form_validation->set_message('required', 'Riempi il campo %s');
		//End Form Validation

		if ($this->form_validation->run() == FALSE) {
			// Validation Errors
			$this->session->set_flashdata('message', validation_errors());
			// Returning to Checkout Page
			redirect($this->input->post('currentURL'));
		} else {
			
			$cover = '';
			// Checking if Empty Cover 
			if (!($_FILES['cover']['size'] == 0)) {
				// Upload Cover
				$config['upload_path'] = './resources/img/news';
				$config['allowed_types'] = 'jpg|png';
					
				$this->load->library('upload');
				$this->upload->initialize($config);
					
				if ( ! $this->upload->do_upload('cover')) {
					$this->session->set_flashdata('message','Inserisci la foto cover nel formato indicato.');
					redirect($this->input->post('currentURL'));
					break;
				}
				else {
					$data = array('cover' => $this->upload->data());
					$cover = $data['cover']['file_name'];
				}
				// End Cover
			}
			
			// Taking Old Article (for checking if title, subtitle or text is different)
			$oldArticle = $this->backmodel->r_news($this->input->post('idNews'), 'it');
			
			// Prepairing the Data for the Article
			$data = array(
				'suspended' => $this->input->post('suspended')
			);
			if ($cover != '') {
				$data['cover'] = $cover;
			}
			// Updating Article
			$this->backmodel->u_news($this->input->post('idNews'), $data);
			
			// Prepairing the Data for the Language
			$dataLang = array(
				'title' => $this->input->post('title'),
				'subtitle' => $this->input->post('subtitle'),
				'text' => $this->input->post('text')
			);
			// Updating Language
			$this->backmodel->u_news_lang($this->input->post('idNews'), 'it', $dataLang);
			
			// Updating all Translations IF necessary
			if ($oldArticle->title != $this->input->post('title') || $oldArticle->subtitle != $this->input->post('subtitle') || $oldArticle->text != $this->input->post('text')) {
				$languages = array('en', 'es', 'fr', 'ru');
				foreach ($languages as $language) {
					// Prepairing the Data for the Language
					$dataLang = array(
						'idNewsL' => $this->input->post('idNews'),
						'title' => $this->translate($this->input->post('title'), $language),
						'subtitle' => $this->translate($this->input->post('subtitle'), $language),
						'text' => $this->translate($this->input->post('text'), $language),
						'lang' => $language
					);
					// Saving Language to Database
					$this->backmodel->u_news_lang($this->input->post('idNews'), $language, $dataLang);
				}
			}
			
			
			$this->session->set_flashdata('message', 'News modificata con successo');
			redirect($this->input->post('currentURL'));
		}
	}
	public function d_article() {
		$this->backmodel->d_news($this->uri->segment(3)); 
		$this->session->set_flashdata('message', 'News cancellata con successo');
		redirect(site_url('back/articles'));
	}
	
	// Category
	function c_category() {
		//Form Validation
		$this->load->library('form_validation');
		
		// Rules
		$this->form_validation->set_rules('nameCategory', 'Nome Categoria Italiana', 'trim|required');
		$this->form_validation->set_rules('nameCategory_en', 'Nome Categoria Inglese', 'trim|required');
		$this->form_validation->set_rules('nameCategory_es', 'Nome Categoria Spagnola', 'trim|required');
		$this->form_validation->set_rules('nameCategory_fr', 'Nome Categoria Francese', 'trim|required');
		$this->form_validation->set_rules('nameCategory_ru', 'Nome Categoria Russa', 'trim|required');
		// Messages
		$this->form_validation->set_message('required', 'Riempi il campo %s');
		//End Form Validation

		if ($this->form_validation->run() == FALSE) {
			// Validation Errors
			$this->session->set_flashdata('message', validation_errors());
			// Returning to Checkout Page
			redirect($this->input->post('currentURL'));
		} else {
				
			// Prepairing the Data for the Category
			$data = array(
				'nameCategory' => strtolower($this->input->post('nameCategory')),
				'nameCategory_en' => strtolower($this->input->post('nameCategory_en')),
				'nameCategory_es' => strtolower($this->input->post('nameCategory_es')),
				'nameCategory_fr' => strtolower($this->input->post('nameCategory_fr')),
				'nameCategory_ru' => strtolower($this->input->post('nameCategory_ru'))
			);
			// Saving Category to Database
			$this->backmodel->c_category($data);
			
			
			$this->session->set_flashdata('message', 'Categoria creata con successo');
			redirect(site_url('back/categories'));
		}
		
	}
	function u_category() {
		//Form Validation
		$this->load->library('form_validation');
		
		// Rules
		$this->form_validation->set_rules('nameCategory', 'Nome Categoria Italiana', 'trim|required');
		$this->form_validation->set_rules('nameCategory_en', 'Nome Categoria Inglese', 'trim|required');
		$this->form_validation->set_rules('nameCategory_es', 'Nome Categoria Spagnola', 'trim|required');
		$this->form_validation->set_rules('nameCategory_fr', 'Nome Categoria Francese', 'trim|required');
		$this->form_validation->set_rules('nameCategory_ru', 'Nome Categoria Russa', 'trim|required');
		
		// Messages
		$this->form_validation->set_message('required', 'Riempi il campo %s');
		//End Form Validation

		if ($this->form_validation->run() == FALSE) {
			// Validation Errors
			$this->session->set_flashdata('message', validation_errors());
			// Returning to Checkout Page
			redirect($this->input->post('currentURL'));
		} else {
				
			// Prepairing the Data for the Category
			$data = array(
				'nameCategory' => strtolower($this->input->post('nameCategory')),
				'nameCategory_en' => strtolower($this->input->post('nameCategory_en')),
				'nameCategory_es' => strtolower($this->input->post('nameCategory_es')),
				'nameCategory_fr' => strtolower($this->input->post('nameCategory_fr')),
				'nameCategory_ru' => strtolower($this->input->post('nameCategory_ru'))
			);
			// Saving Category to Database
			$this->backmodel->u_category($this->input->post('idCategory'), $data);
			
			
			$this->session->set_flashdata('message', 'Categoria modificata con successo');
			redirect(site_url('back/categories'));
		}
		
	}
	function d_category() {
		// Deleting the Category
		$this->backmodel->d_category($this->uri->segment(3));
		
		// Taking all the Category Subcategories
		$data['subcategories'] = $this->backmodel->ra_subcategory_category($this->uri->segment(3));
		foreach ($data['subcategories'] as $subcategory) {
			// Suspend all Subcategory Products
			$data = array(
				'suspended' => 1
			);
			$this->backmodel->u_subcategory_product($subcategory->idSubcategory, $data);
		}
		
		// Daleting All the Category Subcategories
		$this->backmodel->d_category_subcategories($this->uri->segment(3));
		
		$this->session->set_flashdata('message', 'Categoria cancellata con successo');
		redirect(site_url('back/categories'));
	}
	
	// Subcategory
	function c_subcategory() {
		//Form Validation
		$this->load->library('form_validation');
		
		// Rules
		$this->form_validation->set_rules('nameSubcategory', 'Nome Sottocategoria Italiana', 'trim|required');
		$this->form_validation->set_rules('nameSubcategory_en', 'Nome Sottocategoria Inglese', 'trim|required');
		$this->form_validation->set_rules('nameSubcategory_es', 'Nome Sottocategoria Spagnola', 'trim|required');
		$this->form_validation->set_rules('nameSubcategory_fr', 'Nome Sottocategoria Fracese', 'trim|required');
		$this->form_validation->set_rules('nameSubcategory_ru', 'Nome Sottocategoria Russa', 'trim|required');
		
		// Messages
		$this->form_validation->set_message('required', 'Riempi il campo %s');
		//End Form Validation

		if ($this->form_validation->run() == FALSE) {
			// Validation Errors
			$this->session->set_flashdata('message', validation_errors());
			// Returning to Checkout Page
			redirect($this->input->post('currentURL'));
		} else {
				
			// Prepairing the Data for the Category
			$data = array(
				'idCategoryS' => $this->input->post('idCategoryS'),
				'nameSubcategory' => strtolower($this->input->post('nameSubcategory')),
				'nameSubcategory_en' => strtolower($this->input->post('nameSubcategory_en')),
				'nameSubcategory_es' => strtolower($this->input->post('nameSubcategory_es')),
				'nameSubcategory_fr' => strtolower($this->input->post('nameSubcategory_fr')),
				'nameSubcategory_ru' => strtolower($this->input->post('nameSubcategory_ru'))
			);
			// Saving Category to Database
			$this->backmodel->c_subcategory($data);
			
			
			$this->session->set_flashdata('message', 'Sottocategoria creata con successo');
			redirect(site_url('back/subcategories'));
		}
		
	}
	function u_subcategory() {
		//Form Validation
		$this->load->library('form_validation');
		
		// Rules
		$this->form_validation->set_rules('nameSubcategory', 'Nome Sottocategoria Italiana', 'trim|required');
		$this->form_validation->set_rules('nameSubcategory_en', 'Nome Sottocategoria Inglese', 'trim|required');
		$this->form_validation->set_rules('nameSubcategory_es', 'Nome Sottocategoria Spagnola', 'trim|required');
		$this->form_validation->set_rules('nameSubcategory_fr', 'Nome Sottocategoria Francese', 'trim|required');
		$this->form_validation->set_rules('nameSubcategory_ru', 'Nome Sottocategoria Russa', 'trim|required');
		// Messages
		$this->form_validation->set_message('required', 'Riempi il campo %s');
		//End Form Validation

		if ($this->form_validation->run() == FALSE) {
			// Validation Errors
			$this->session->set_flashdata('message', validation_errors());
			// Returning to Checkout Page
			redirect($this->input->post('currentURL'));
		} else {
				
			// Prepairing the Data for the Category
			$data = array(
				'idCategoryS' => $this->input->post('idCategoryS'),
				'nameSubcategory' => strtolower($this->input->post('nameSubcategory')),
				'nameSubcategory_en' => strtolower($this->input->post('nameSubcategory_en')),
				'nameSubcategory_es' => strtolower($this->input->post('nameSubcategory_es')),
				'nameSubcategory_fr' => strtolower($this->input->post('nameSubcategory_fr')),
				'nameSubcategory_ru' => strtolower($this->input->post('nameSubcategory_ru'))
			);
			// Saving Category to Database
			$this->backmodel->u_subcategory($this->input->post('idSubcategory'), $data);
			
			
			$this->session->set_flashdata('message', 'Sottocategoria creata con successo');
			redirect(site_url('back/subcategories'));
		}
		
	}
	function d_subcategory() {
		// Delete the Subcategory
		$this->backmodel->d_subcategory($this->uri->segment(3)); 
		
		// Suspend all Subcategory Products
		$data = array(
			'suspended' => 1
		);
		$this->backmodel->u_subcategory_product($this->uri->segment(3), $data);
		
		$this->session->set_flashdata('message', 'Sottocategoria cancellata con successo');
		redirect(site_url('back/subcategories'));
	}
	
	// Newsletter
	function c_newsletter() {

		//Form Validation
		$this->load->library('form_validation');
		
		// Rules
		$this->form_validation->set_rules('title', 'Titolo', 'trim|required');
		$this->form_validation->set_rules('subtitle', 'Sottotitolo', 'trim|required');
		$this->form_validation->set_rules('text', 'Testo', 'trim|required');
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
			
			// Email to Clients
			$this->email->from('info@ragssoutlet.it');
			$this->email->subject($this->input->post('title'));
			$this->email->to('info@ragssoutlet.it');
			
			$emails = array();
			foreach ($this->backmodel->ra_newsletter() as $email) {
				array_push($emails, $email->email);
			}
			
			$this->email->bcc($emails);			
			$message = 
			"<h1>" . $this->input->post('title') . "</h1>"
			. "<h2>" . $this->input->post('subtitle') . "</h2>"
			. $this->input->post('text');
			
			$this->email->message($message);
			$this->email->send();
			// End Email to Clients
			
			$this->session->set_flashdata('message', 'Newsletter inviata con successo');
			redirect($this->input->post('currentURL'));
		}

	}
	
	function export_newsletter() {
		$this->load->helper('file');
		
		// Data to write
		$data['newsletter'] = $this->backmodel->ra_newsletter();
		$string = "";
		foreach ($data['newsletter'] as $row) {
			$string = $string . $row->email . "\n";
		}
		
		if ( ! write_file('./resources/csv/newsletter.csv', $string)) {
			$this->session->set_flashdata('message', 'Impossibile esportare il file CSV. Prego, riprovare più tardi.');
			redirect(site_url('back'));
		} else {
			$this->load->helper('download');
			
			$data = file_get_contents($this->config->item('resources_url') . '/csv/newsletter.csv'); // Read the file's contents
			$name = 'newsletter.csv';
			
			force_download($name, $data);
		}
		
	}
	
// Newsletter
	function send_quick_mail() {

		//Form Validation
		$this->load->library('form_validation');
		
		// Rules
		$this->form_validation->set_rules('email', 'Email', 'trim|required');
		$this->form_validation->set_rules('subject', 'Soggetto', 'trim|required');
		$this->form_validation->set_rules('text', 'Testo', 'trim|required');
		// Messages
		$this->form_validation->set_message('required', 'Riempi il campo %s');
		//End Form Validation

		if ($this->form_validation->run() == FALSE) {
			// Validation Errors
			$this->session->set_flashdata('message', validation_errors());
			// Returning to Checkout Page
			redirect(site_url('back'));
		} else {
			
			// Email Library
			$this->load->library('email');
			$config['mailtype'] = 'html';
			$this->email->initialize($config);
			
			// Email to Clients
			$this->email->from('info@ragssoutlet.it');
			$this->email->subject($this->input->post('subject'));
			$this->email->to('info@ragssoutlet.it');
					
			$message = $this->input->post('text');
			
			$this->email->message($message);
			$this->email->send();
			// End Email to Clients
			
			$this->session->set_flashdata('message', 'Email inviata con successo');
			redirect(site_url('back'));
		}

	}
	
// Translate
	function translate($text, $to) {
	
		$this->load->library('AccessTokenAuthentication');
		$this->load->library('HttpTranslator');
		
		try {
		    //Client ID of the application.
		    $clientID       = "e6de2f33-271b-454b-8276-af3751f67466";
		    //Client Secret key of the application.
		    $clientSecret = "qBR34a73/7C3k0IHSQtowFLod2ovU13L01g8mUmlVxk";
		    //OAuth Url.
		    $authUrl      = "https://datamarket.accesscontrol.windows.net/v2/OAuth2-13/";
		    //Application Scope Url
		    $scopeUrl     = "http://api.microsofttranslator.com";
		    //Application grant type
		    $grantType    = "client_credentials";
		    //Create the AccessTokenAuthentication object.
		    $authObj      = new AccessTokenAuthentication();
		    //Get the Access token.
		    $accessToken  = $authObj->getTokens($grantType, $scopeUrl, $clientID, $clientSecret, $authUrl);
		    //Create the authorization Header string.
		    $authHeader = "Authorization: Bearer ". $accessToken;
		    
		    //Create the Translator Object.
		    $translatorObj = new HTTPTranslator();
		    
		    
		    //HTTP Translate Method URL.
		    $translateMethodUrl = "http://api.microsofttranslator.com/v1/Http.svc/Translate?text=". urlencode($text). "&from=it&to=" . $to;
		    //Call the curlRequest.
		    $strResponse = $translatorObj->curlRequest($translateMethodUrl, $authHeader);
		    return $strResponse;
		} catch (Exception $e) {
		    echo "Exception: " . $e->getMessage() . PHP_EOL;
		}
		
	}

// END ACTIONS
}
