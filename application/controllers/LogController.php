<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class LogController extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
	public function index()
	{	
		$this->load->helper('url');
		$this->load->model('LoginModel');
		
	    $login = $this->input->post('log');
	    $pass = $this->input->post('pass');
		$val=$this->LoginModel->checkLogin($login,$pass);
		
	   
		
		$data['valiny']= $val;
		if($val!=null){
		
			  
           
			redirect('BackController');
			//$this->layout->view('garage/anatyindex',$data);
		}
		else{
				redirect('Welcome/goAdmin/error?err=1');
				//$this->layout->view('garage/login/error?err=0');
		}
		
	    
	}
	// public function goRechercher()
	// {	
		// $this->load->helper('url');
		// $this->load->model('CategorieModel');
		// $this->load->model('SousCateModel');
	   
	    // $idCategorie = $this->input->post('id');
		// $SousCate=$this->SousCateModel->getSousCate($idCategorie);
		//echo $idCategorie;
		 
		// $data = array();
		// $data['SousCate']= $SousCate;
		// $this->load->view('ato/recherche', $data);
	// }
	
	/* public function goPanier()
	{	
		$this->load->helper('url');
		$this->load->model('PanierModel');
		$Panier=$this->PanierModel->getDetPanierByIDPanier(9);
		
	   
	    // $idCategorie = $this->input->post('id');
		//$SousCate=$this->SousCateModel->getSousCate($idCategorie);
		//echo $idCategorie;
		 
		$data = array();
		$data['Panier']= $Panier;
		$this->load->view('ato/product_summary',$data);
	}
	public function goListeFacture()
	{	
		$this->load->helper('url');
		$this->load->model('FacturePModel');
		/*$offset=$this->input->post("offset");
		$limit=$this->input->post("limit"); 
		
		$Facture=$this->FacturePModel->getAllFacturePagine(0,3);
		
	   
	    // $idCategorie = $this->input->post('id');
		//$SousCate=$this->SousCateModel->getSousCate($idCategorie);
		//echo $idCategorie;
		 
		$data = array();
		$data['Liste']= $Facture;
		$data['offset']= 0;
		$this->load->view('ato/ListeFacture',$data);
	} */
	
	
}
